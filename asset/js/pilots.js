/* Podio final 2026: noticia oficial del 20/10/2026 + tabla general RPP.
   Vehículos, dorsales y localidad: listado de inscritos 2026.
   No inventar edad, puntos ni victorias de etapa. */
const pilots = {
  1:{name:'Eduardo Castro Yangali',initials:'EC',team:'Juan Pedro Cilloniz · copiloto',category:'RC3',number:'44',city:'Lima',rank:'1.º',copilot:'J. P. Cilloniz',vehicle:'Ford Fiesta',bio:'Campeón de la edición 54 de Caminos del Inca 2026 junto a Juan Pedro Cilloniz. La organización destacó una definición ajustada, con 36 segundos de ventaja sobre la segunda tripulación.'},
  2:{name:'André Martínez',initials:'AM',team:'Matías Aranguren · copiloto',category:'RC3',number:'47',city:'Lima',rank:'2.º',copilot:'M. Aranguren',vehicle:'Ford Fiesta Rally 3',bio:'Segundo puesto de la clasificación general 2026 junto a Matías Aranguren. Ganó varias etapas y luchó por la victoria hasta la jornada final.'},
  3:{name:'Jorge Martínez',initials:'JM',team:'José Aros · copiloto',category:'RC2',number:'59',city:'Lima',rank:'3.º',copilot:'José Aros',vehicle:'Hyundai i20 N',bio:'Tercera posición en la clasificación general publicada por RPP y ganador de la categoría RC2 junto a José Aros según la organización.'}
};
const dialog=document.getElementById('pilot-dialog');let previousFocus=null;
const field=(id,value)=>{const node=document.getElementById('pilot-dialog-'+id);if(node)node.textContent=value;};
document.querySelectorAll('[data-pilot]').forEach(button=>{
  button.addEventListener('click',()=>{
    const person=pilots[button.dataset.pilot];if(!person||!dialog)return;
    previousFocus=button;
    field('title',person.name);field('avatar',person.initials);field('team',person.team);
    field('category',person.category);field('age',person.number);field('city',person.city);
    field('points',person.rank);field('wins',person.number);field('podiums',person.copilot);field('stages',person.vehicle);field('bio',person.bio);
    if(typeof dialog.showModal==='function')dialog.showModal();
    document.body.classList.add('pilot-modal-open');
  });
});
const close=()=>dialog?.close();
document.querySelector('.pilot-dialog__close')?.addEventListener('click',close);
document.getElementById('pilot-dialog-done')?.addEventListener('click',close);
dialog?.addEventListener('click',event=>{if(event.target===dialog)close();});
dialog?.addEventListener('close',()=>{document.body.classList.remove('pilot-modal-open');previousFocus?.focus();});
