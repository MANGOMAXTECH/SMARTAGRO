document.addEventListener('DOMContentLoaded', function () {
  initSidebarOverlay();
  initSearchHighlight();
  initTooltips();
  initAutoCloseAlerts();
  initDataTableSorting();
  initStatusFilter();
  initConfirmationDialogs();
  initActiveNavHighlight();
  initChartAutoRefresh();
});

function initSidebarOverlay() {
  const overlay = document.querySelector('.sidebar-overlay');
  const pushMenu = document.querySelector('[data-widget="pushmenu"]');
  const body = document.body;

  if (!overlay) return;

  overlay.addEventListener('click', function () {
    body.classList.remove('sidebar-open');
    body.classList.remove('sidebar-collapse');
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 991) {
      body.classList.remove('sidebar-open');
    }
  });
}

function initSearchHighlight() {
  const searchInput = document.querySelector('[data-widget="sidebar-search"] input');
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      const query = this.value.toLowerCase();
      const navItems = document.querySelectorAll('.nav-treeview .nav-link, .nav > .nav-item > .nav-link');
      navItems.forEach(function (item) {
        const text = item.textContent.toLowerCase();
        const parent = item.closest('.nav-item');
        if (parent) {
          parent.style.display = text.includes(query) ? '' : 'none';
        }
      });
    });
  }
}

function initTooltips() {
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
}

function initAutoCloseAlerts() {
  const alerts = document.querySelectorAll('.alert-dismissible');
  alerts.forEach(function (alert) {
    setTimeout(function () {
      const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
      bsAlert.close();
    }, 5000);
  });
}

function initDataTableSorting() {
  const tables = document.querySelectorAll('.table.sortable');
  tables.forEach(function (table) {
    const headers = table.querySelectorAll('th');
    headers.forEach(function (header, index) {
      header.style.cursor = 'pointer';
      header.addEventListener('click', function () {
        sortTable(table, index);
      });
    });
  });
}

function sortTable(table, columnIndex) {
  const tbody = table.querySelector('tbody');
  const rows = Array.from(tbody.querySelectorAll('tr'));
  const isAscending = table.dataset.sortColumn === String(columnIndex) && table.dataset.sortDir === 'asc';

  rows.sort(function (a, b) {
    const aVal = a.cells[columnIndex].textContent.trim();
    const bVal = b.cells[columnIndex].textContent.trim();
    const aNum = parseFloat(aVal.replace(/[^0-9.-]/g, ''));
    const bNum = parseFloat(bVal.replace(/[^0-9.-]/g, ''));

    if (!isNaN(aNum) && !isNaN(bNum)) {
      return isAscending ? bNum - aNum : aNum - bNum;
    }
    return isAscending ? bVal.localeCompare(aVal) : aVal.localeCompare(bVal);
  });

  rows.forEach(function (row) {
    tbody.appendChild(row);
  });

  table.dataset.sortColumn = String(columnIndex);
  table.dataset.sortDir = isAscending ? 'desc' : 'asc';
}

function initStatusFilter() {
  const filterButtons = document.querySelectorAll('[data-filter]');
  filterButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      const filter = this.dataset.filter;
      const rows = document.querySelectorAll('[data-status]');
      rows.forEach(function (row) {
        if (filter === 'all' || row.dataset.status === filter) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });

      filterButtons.forEach(function (btn) {
        btn.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
}

function initConfirmationDialogs() {
  const deleteButtons = document.querySelectorAll('[data-confirm]');
  deleteButtons.forEach(function (button) {
    button.addEventListener('click', function (e) {
      const message = this.dataset.confirm || 'Are you sure?';
      if (!confirm(message)) {
        e.preventDefault();
      }
    });
  });
}

function initActiveNavHighlight() {
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.sidebar .nav-link');
  navLinks.forEach(function (link) {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });
}

function showNotification(message, type) {
  type = type || 'success';
  const alertHtml = '<div class="alert alert-' + type + ' alert-dismissible fade show alert-agro" role="alert">' +
    message +
    '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
    '</div>';

  const container = document.querySelector('.content-wrapper');
  if (container) {
    const alertDiv = document.createElement('div');
    alertDiv.innerHTML = alertHtml;
    container.insertBefore(alertDiv.firstElementChild, container.firstChild);

    setTimeout(function () {
      const bsAlert = bootstrap.Alert.getOrCreateInstance(alertDiv.firstElementChild);
      bsAlert.close();
    }, 4000);
  }
}

function formatCurrency(amount) {
  return new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD'
  }).format(amount);
}

function formatDate(dateString) {
  const options = { year: 'numeric', month: 'short', day: 'numeric' };
  return new Date(dateString).toLocaleDateString('en-US', options);
}

function formatNumber(num) {
  return new Intl.NumberFormat('en-US').format(num);
}

function initChartAutoRefresh() {
  const charts = document.querySelectorAll('canvas[id$="Chart"]');
  if (charts.length === 0) return;

  setInterval(() => {
    charts.forEach(canvas => {
      const chart = Chart.getChart(canvas);
      if (chart) {
        const url = canvas.dataset.chartUrl;
        if (url) {
          fetch(url)
            .then(r => r.json())
            .then(data => {
              chart.data = data;
              chart.update('none');
              const updatedEl = document.getElementById(canvas.id + 'Updated');
              if (updatedEl) updatedEl.textContent = 'Just now';
            })
            .catch(() => {});
        }
      }
    });
  }, 30000);
}

function exportChart(canvasId) {
  const canvas = document.getElementById(canvasId);
  if (!canvas) return;
  const link = document.createElement('a');
  link.download = canvasId + '.png';
  link.href = canvas.toDataURL('image/png');
  link.click();
}