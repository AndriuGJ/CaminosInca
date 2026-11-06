/* Programa oficial de la edición 54, publicado en rallycaminosdelinca.com.
   Los kilómetros y desniveles no están confirmados en la fuente utilizada. */
const stages=[
{from:"Lima",to:"Huancayo",date:"Sáb. 10 oct.",start:"09:00",hint:"Etapa 1 · Inicio en Canta",description:"Primera etapa del rally entre Lima y Huancayo, con largada desde Canta. La organización reportó tres pruebas especiales, entre ellas Canta–La Cima, Concho–Jauja y Paccha–Manzanares.",source:"https://rallycaminosdelinca.com/noticias/eduardo-castro-yangali-gano-la-primera-etapa-entre-canta-y-huancayo/"},
{from:"Huancayo",to:"Ayacucho",date:"Lun. 12 oct.",start:"09:00",hint:"Etapa 2 · Sierra central",description:"Segunda etapa entre Huancayo y Ayacucho. La crónica oficial informa que comprendió tres pruebas especiales sobre superficies variadas.",source:"https://rallycaminosdelinca.com/noticias/nicolas-fuchs-se-impone-en-la-segunda-etapa-entre-huancayo-y-ayacucho/"},
{from:"Ayacucho",to:"Andahuaylas",date:"Mié. 14 oct.",start:"09:00",hint:"Etapa 3 · Dos especiales",description:"Tercera etapa entre Ayacucho y Andahuaylas. La organización informó que se disputó sobre dos pruebas especiales.",source:"https://rallycaminosdelinca.com/noticias/andre-martinez-gana-la-tercera-etapa-y-recorta-distancia-con-el-lider/"},
{from:"Andahuaylas",to:"Cusco",via:"Abancay",date:"Jue. 15 oct.",start:"08:00",hint:"Etapa 4 · Vía Abancay",description:"Cuarta etapa: Andahuaylas – Abancay – Cusco. Según la crónica oficial contó con tres pruebas especiales.",source:"https://rallycaminosdelinca.com/noticias/andre-martinez-gana-la-cuarta-etapa-y-recorta-distancias-con-el-lider/"},
{from:"Cusco",to:"Puno",date:"Sáb. 17 oct.",start:"07:00",hint:"Etapa 5 · Altiplano",description:"Quinta etapa entre Cusco y Puno, seguida por la publicación del orden de partida para la jornada final.",source:"https://rallycaminosdelinca.com/"},
{from:"Puno",to:"Arequipa",date:"Dom. 18 oct.",start:"09:00",hint:"Etapa 6 · Llegada",description:"Etapa final entre Puno y Arequipa. El programa contempla revisión técnica y ceremonia de premiación al terminar la jornada.",source:"https://rallycaminosdelinca.com/"}
];
const list=document.getElementById('routes-list');
const text=(id,value)=>{const node=document.getElementById(id);if(node)node.textContent=value;};
function selectStage(i){
 const stage=stages[i];if(!stage)return;
 text('route-detail-number','ETAPA '+String(i+1).padStart(2,'0'));
 text('route-detail-title',stage.from.toUpperCase()+(stage.via?' – '+stage.via.toUpperCase():'')+' → '+stage.to.toUpperCase());
 text('route-detail-date',stage.date+' · '+stage.start);
 text('route-detail-distance','Sin dato oficial');
 text('route-detail-altitude','Sin dato oficial');
 text('route-detail-description',stage.description);
 text('route-elevation-from',stage.from.toUpperCase());
 text('route-elevation-to',stage.to.toUpperCase());
 const source=document.getElementById('route-official-source');if(source)source.href=stage.source;
 document.querySelectorAll('.route-item').forEach((button,j)=>button.setAttribute('aria-pressed',String(i===j)));
}
stages.forEach((stage,i)=>{
 const b=document.createElement('button');b.type='button';b.className='route-item';b.setAttribute('aria-pressed','false');
 const n=document.createElement('span');n.className='route-item__num';
 const label=document.createElement('small');label.textContent='ETAPA';
 const number=document.createElement('strong');number.textContent=String(i+1).padStart(2,'0');n.append(label,number);
 const main=document.createElement('span');main.className='route-item__main';
 const title=document.createElement('strong');title.textContent=stage.from+(stage.via?' – '+stage.via:'')+' → '+stage.to;
 const subtitle=document.createElement('small');subtitle.textContent=stage.date+' · '+stage.start+' · '+stage.hint;main.append(title,subtitle);
 const arrow=document.createElement('span');arrow.className='route-item__arrow';arrow.textContent='›';arrow.setAttribute('aria-hidden','true');
 b.append(n,main,arrow);b.addEventListener('click',()=>selectStage(i));list?.append(b);
});
selectStage(0);
