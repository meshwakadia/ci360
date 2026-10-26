document.addEventListener('DOMContentLoaded',()=>{
  const t=document.querySelector('.menu-toggle');
  const m=document.querySelector('.menu');
  if(t&&m){t.addEventListener('click',()=>m.classList.toggle('open'));m.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>m.classList.remove('open')))}
});
