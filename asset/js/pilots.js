/* Datos ficticios para prototipar el ranking. Sustituir por información oficial. */
const pilots = {
  1: {name:'Andrés Salazar',initials:'AS',team:'Equipo Demo Inca',category:'RC2',age:'32 años',city:'Arequipa',points:128,wins:6,podiums:8,stages:15},
  2: {name:'Marco Rivera',initials:'MR',team:'Equipo Rally Perú',category:'RC2',age:'30 años',city:'Lima',points:116,wins:4,podiums:6,stages:14},
  3: {name:'Luis Gamarra',initials:'LG',team:'Equipo Andes Racing',category:'RC3',age:'29 años',city:'Cusco',points:109,wins:3,podiums:5,stages:14}
};
const dialog=document.getElementById('pilot-dialog');
let previousFocus=null;
const field=(id,value)=>{const node=document.getElementById('pilot-dialog-'+id);if(node)node.textContent=value;};
document.querySelectorAll('[data-pilot]').forEach(button=>{
  button.addEventListener('click',()=>{
    const person=pilots[button.dataset.pilot];if(!person || !dialog)return;
    previousFocus=button;
    field('title',person.name);field('avatar',person.initials);field('team',person.team);
    field('category',person.category);field('age',person.age);field('city',person.city);
    field('points',person.points);field('wins',person.wins);field('podiums',person.podiums);field('stages',person.stages);
    field('bio','Perfil demostrativo del piloto. Aquí se mostrará su biografía real, experiencia y trayectoria en el Rally Caminos del Inca.');
    if(typeof dialog.showModal==='function') dialog.showModal();
    document.body.classList.add('pilot-modal-open');
  });
});
const close=()=>dialog?.close();
document.querySelector('.pilot-dialog__close')?.addEventListener('click',close);
document.getElementById('pilot-dialog-done')?.addEventListener('click',close);
dialog?.addEventListener('click',event=>{if(event.target===dialog)close();});
dialog?.addEventListener('close',()=>{document.body.classList.remove('pilot-modal-open');previousFocus?.focus();});
