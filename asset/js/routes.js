/* Datos únicamente ilustrativos. No publicar como recorrido oficial. */
const stages=[
  {from:"Lima",to:"Huancayo",hint:"Tramo 01 · Andes centrales",description:"Salida de ejemplo desde la capital hacia los Andes centrales. El detalle definitivo se actualizará con el itinerario confirmado del evento."},
  {from:"Huancayo",to:"Ayacucho",hint:"Tramo 02 · Sierra central",description:"Etapa ilustrativa por la sierra central, con paisajes cambiantes y navegación exigente."},
  {from:"Ayacucho",to:"Abancay",hint:"Tramo 03 · Valles andinos",description:"Propuesta de recorrido entre valles y montañas. Distancias y horarios pendientes de confirmación."},
  {from:"Abancay",to:"Cusco",hint:"Tramo 04 · Paisaje histórico",description:"Tramo demostrativo hacia el Cusco, con una combinación de desniveles y curvas."},
  {from:"Cusco",to:"Arequipa",hint:"Tramo 05 · Altiplano",description:"Etapa de ejemplo para ilustrar la transición por paisajes de altura."},
  {from:"Arequipa",to:"Puno",hint:"Tramo 06 · Meta ilustrativa",description:"Última etapa de ejemplo de este prototipo. La llegada oficial debe verificarse con la organización."}
];
const list=document.getElementById('routes-list');
const text=(id,value)=>{const node=document.getElementById(id);if(node)node.textContent=value;};
function selectStage(i){
 const stage=stages[i];if(!stage)return;
 text('route-detail-number','ETAPA '+String(i+1).padStart(2,'0'));
 text('route-detail-title',stage.from.toUpperCase()+' → '+stage.to.toUpperCase());
 text('route-detail-date','Por confirmar');
 text('route-detail-distance','Por confirmar');
 text('route-detail-altitude','Por confirmar');
 text('route-detail-description',stage.description);
 text('route-elevation-from',stage.from.toUpperCase());
 text('route-elevation-to',stage.to.toUpperCase());
 document.querySelectorAll('.route-item').forEach((button,j)=>button.setAttribute('aria-pressed',String(i===j)));
}
stages.forEach((stage,i)=>{
 const b=document.createElement('button');b.type='button';b.className='route-item';b.setAttribute('aria-pressed','false');
 const n=document.createElement('span');n.className='route-item__num';
 const label=document.createElement('small');label.textContent='ETAPA';
 const number=document.createElement('strong');number.textContent=String(i+1).padStart(2,'0');n.append(label,number);
 const main=document.createElement('span');main.className='route-item__main';
 const title=document.createElement('strong');title.textContent=stage.from+' → '+stage.to;
 const subtitle=document.createElement('small');subtitle.textContent=stage.hint+' · Datos por confirmar';main.append(title,subtitle);
 const arrow=document.createElement('span');arrow.className='route-item__arrow';arrow.textContent='›';arrow.setAttribute('aria-hidden','true');
 b.append(n,main,arrow);b.addEventListener('click',()=>selectStage(i));list?.append(b);
});
selectStage(0);
