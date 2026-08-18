// AGROAGRO dashboard JS
// - Initializes mini sparkline charts (Chart.js)
// - ApexCharts main revenue chart
// - DataTable for recent users

document.addEventListener('DOMContentLoaded', function(){
  // Mini charts data (placeholder random)
  document.querySelectorAll('canvas[id^="mini-"]').forEach(function(canvas){
    const ctx = canvas.getContext('2d');
    const data = Array.from({length:8},()=>Math.floor(Math.random()*80)+20);
    new Chart(ctx, {
      type:'line',
      data:{labels:data.map((_,i)=>i), datasets:[{data:data,borderColor:'#2fa84f',backgroundColor:'rgba(47,168,79,0.08)',fill:true,tension:0.3,pointRadius:0}]},
      options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{display:false},y:{display:false}}}
    });
  });

  // ApexCharts revenue chart
  if(document.getElementById('revenue-chart')){
    const options = {
      chart: {type: 'area', height: 320, toolbar:{show:false}},
      series: [{name:'Revenue', data:[12000,15000,14000,18000,20000,22000,24000,26000,30000,32000,34000,38290]}],
      stroke:{curve:'smooth'},
      fill:{type:'gradient',gradient:{shadeIntensity:1,opacityFrom:0.6,opacityTo:0.1,stops:[0,90,100]}},
      xaxis:{categories:['Sep','Oct','Nov','Dec','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug']},
      colors:['#2fa84f']
    };
    const chart = new ApexCharts(document.querySelector('#revenue-chart'), options);
    chart.render();
  }

  // Orders chart (Chart.js bar)
  if(document.getElementById('orders-chart')){
    const ctx = document.getElementById('orders-chart').getContext('2d');
    new Chart(ctx,{
      type:'bar',
      data:{labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],datasets:[{label:'Orders',data:[45,60,75,50,80,95,120,110,90,130,150,160],backgroundColor:'rgba(47,168,79,0.85)'}]},
      options:{plugins:{legend:{display:false}},scales:{y:{beginAtZero:true}}}
    });
  }

  // DataTable init (requires jQuery/DataTables loaded)
  try{
    if(window.jQuery && jQuery().DataTable){
      $('#recent-users-table').DataTable({
        pageLength:10,
        lengthChange:false,
        searching:true,
      });
    }
  }catch(e){console.warn('DataTable init failed',e)}

  // Theme toggle
  const themeToggle = document.getElementById('themeToggle');
  if(themeToggle){
    themeToggle.addEventListener('click',()=>{
      document.body.classList.toggle('agro-dark');
      // simple dark mode styles
      if(document.body.classList.contains('agro-dark')){
        document.documentElement.style.setProperty('--card-bg','rgba(12,17,23,0.7)');
        document.documentElement.style.setProperty('--glass-bg','rgba(255,255,255,0.02)');
        document.documentElement.style.setProperty('--muted','#9ca3af');
        document.documentElement.style.setProperty('--primary-green','#2fa84f');
      }else{
        document.documentElement.style.setProperty('--card-bg','rgba(255,255,255,0.85)');
        document.documentElement.style.setProperty('--glass-bg','rgba(255,255,255,0.6)');
        document.documentElement.style.setProperty('--muted','#6b7280');
      }
    });
  }
});
