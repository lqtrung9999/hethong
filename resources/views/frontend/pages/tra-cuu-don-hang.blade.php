{{--
  Trang tra cứu đơn hàng Kim Thành Tín Logistics.
  Route: /tra-cuu-don-hang
  View: frontend.pages.tra-cuu-don-hang
--}}
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#0b1428">
  <title>Tra cứu vận đơn | Kim Thành Tín Logistics</title>
  <style>
    :root{--navy:#0b1428;--navy2:#121d35;--red:#b91f23;--red2:#8c171c;--gold:#ffd21c;--ink:#19243a;--muted:#66758f;--line:#dce3ee;--green:#16a34a;--soft:#f6f8fc}
    *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:var(--navy);color:#fff;font:16px Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif}button,input{font:inherit}
    .shell{min-height:100vh;background:radial-gradient(circle at 82% 8%,rgba(255,210,28,.08),transparent 27%),linear-gradient(135deg,#0b1428,#101a31 70%,#0b1428)}
    .hero{max-width:1180px;margin:auto;padding:54px 34px 46px}.top{display:flex;justify-content:space-between;align-items:center;gap:24px;margin-bottom:70px}.brand{display:flex;align-items:center;gap:12px;font-weight:850;letter-spacing:.02em}.mark{display:grid;place-items:center;width:45px;height:45px;border-radius:12px;background:linear-gradient(145deg,var(--gold),#f09f0d);color:var(--red2);font-size:22px;box-shadow:0 8px 25px rgba(255,210,28,.2)}.brand small{display:block;color:#aeb8cb;font-size:11px;letter-spacing:.16em;margin-top:3px}.support{color:#cbd3e1;font-size:14px}.support strong{color:#fff}
    .badge{display:inline-flex;align-items:center;gap:12px;max-width:100%;padding:12px 20px;border:1px solid #e33b3f;border-radius:999px;background:linear-gradient(90deg,var(--red2),var(--red));color:var(--gold);font-weight:800;line-height:1.35}.badge i{width:13px;height:13px;min-width:13px;border-radius:50%;background:var(--gold);box-shadow:0 0 16px var(--gold)}
    h1{max-width:1100px;font-size:clamp(42px,6.5vw,82px);line-height:1.02;letter-spacing:.025em;margin:30px 0 18px;color:var(--gold);font-weight:950;text-transform:uppercase;text-shadow:0 5px 24px rgba(255,210,28,.2)}.lead{font-size:clamp(19px,2.25vw,29px);color:#fff;margin:0 0 30px;font-weight:650;letter-spacing:.06em}
    .search{display:grid;grid-template-columns:56px 1fr auto;align-items:center;max-width:1020px;background:#fff;border:3px solid #f2c9ca;border-radius:20px;padding:12px 14px 12px 22px;box-shadow:0 24px 70px rgba(0,0,0,.28)}.search svg{color:var(--red)}.search input{width:100%;border:0;outline:0;color:var(--ink);font-weight:750;font-size:22px;text-transform:uppercase;padding:18px 10px;background:transparent}.search input::placeholder{color:#8995aa;text-transform:none;font-weight:600}.search button{border:0;border-radius:14px;background:var(--red);color:var(--gold);font-weight:850;font-size:20px;padding:20px 34px;cursor:pointer;box-shadow:0 9px 20px rgba(185,31,35,.28);transition:.2s}.search button:hover{transform:translateY(-2px);background:#ca252a}.search button:disabled{opacity:.65;cursor:wait;transform:none}.hint{margin:15px 3px 0;color:#aeb8cb;font-size:14px}.hint code{color:#fff;background:rgba(255,255,255,.08);padding:3px 7px;border-radius:5px}
    .benefits{display:flex;gap:34px;flex-wrap:wrap;margin-top:34px;color:#fff;font-weight:700}.benefit{display:flex;align-items:center;gap:10px}.check{display:grid;place-items:center;border:2px solid var(--gold);color:var(--gold);width:24px;height:24px;border-radius:50%;font-size:13px}
    .result-wrap{background:#eef2f8;color:var(--ink);padding:50px 24px 70px}.result{max-width:1080px;margin:auto}.hidden{display:none!important}.notice{max-width:1080px;margin:auto;background:#fff;border:1px solid var(--line);border-radius:18px;padding:34px;text-align:center;box-shadow:0 10px 30px rgba(26,39,67,.08)}.notice h2{margin:0 0 10px}.notice p{margin:0;color:var(--muted);line-height:1.6}.error-icon{display:grid;place-items:center;margin:0 auto 17px;width:52px;height:52px;border-radius:50%;background:#fee2e2;color:var(--red);font-weight:900;font-size:24px}
    .order-head{display:flex;justify-content:space-between;align-items:center;gap:24px;background:linear-gradient(110deg,var(--red2),var(--red));padding:26px 30px;border-radius:22px 22px 0 0;color:#fff;border-bottom:5px solid var(--gold)}.eyebrow{color:var(--gold);font-weight:800;text-transform:uppercase;letter-spacing:.08em;font-size:13px}.order-code{font-size:29px;font-weight:900;letter-spacing:.02em;margin-top:5px}.close{border:0;width:48px;height:48px;border-radius:50%;background:rgba(255,255,255,.14);color:#ffc9ca;font-size:28px;cursor:pointer}
    .summary{display:grid;grid-template-columns:1fr 1fr;gap:20px;background:#fff;padding:28px 30px 10px}.summary-card{background:var(--soft);border:1px solid var(--line);border-radius:14px;padding:20px}.label{color:var(--muted);font-size:12px;font-weight:850;letter-spacing:.1em;text-transform:uppercase}.status-text{font-size:24px;font-weight:900;color:var(--red);margin-top:10px}.location{font-size:20px;font-weight:850;margin-top:10px}
    .timeline-card{background:#fff;padding:24px 30px 34px;border-radius:0 0 22px 22px}.timeline{position:relative;margin:8px 0 0;padding:0;list-style:none}.timeline:before{content:"";position:absolute;left:13px;top:15px;bottom:24px;width:3px;background:var(--line)}.event{position:relative;padding:0 0 28px 48px}.event:last-child{padding-bottom:0}.dot{position:absolute;left:2px;top:3px;width:25px;height:25px;border-radius:50%;border:4px solid #fff;background:#fff;box-shadow:0 0 0 3px #c7d1df}.event.done .dot{background:var(--green);box-shadow:0 0 0 3px var(--green)}.event.active .dot{background:var(--gold);box-shadow:0 0 0 3px var(--red)}.event-time{color:var(--muted);font-size:14px;font-weight:800;margin-bottom:5px}.event-title{font-size:20px;font-weight:850}.event-detail{margin-top:5px;color:var(--muted)}.event.pending .event-title,.event.pending .event-time{color:#9aa6b8}.privacy{font-size:12px;color:#7d899b;text-align:center;margin-top:18px;line-height:1.5}
    @media(max-width:700px){.hero{padding:28px 18px 34px}.top{margin-bottom:45px}.support{display:none}.search{grid-template-columns:38px 1fr;padding:9px 12px 9px 16px}.search input{font-size:17px;padding:16px 4px}.search button{grid-column:1/-1;width:100%;padding:15px;margin-top:4px}.benefits{gap:17px;font-size:14px}.result-wrap{padding:24px 12px 40px}.order-head,.summary,.timeline-card{padding-left:20px;padding-right:20px}.summary{grid-template-columns:1fr}.order-code{font-size:22px}.event-title{font-size:17px}}
  </style>
</head>
<body>
<main class="shell">
  <section class="hero">
    <div class="top"><div class="brand"><span class="mark">KT</span><span>KIM THÀNH TÍN<small>LOGISTICS</small></span></div><div class="support">Hỗ trợ tra cứu: <strong>Liên hệ nhân viên phụ trách</strong></div></div>
    <div class="badge"><i></i> Uỷ Thác XNK &amp; Vận Chuyển Chính Ngạch Trung – Việt</div>
    <h1>Tra Cứu Hành Trình Đơn Hàng</h1>
    <p class="lead">“Vận chuyển Thần Tốc Xuyên Biên Giới”</p>
    <form class="search" id="searchForm">
      <svg width="29" height="29" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-4-4"></path></svg>
      <input id="orderInput" autocomplete="off" spellcheck="false" aria-label="Mã vận đơn" placeholder="Nhập mã hàng của bạn" maxlength="40">
      <button id="searchButton" type="submit">Tra cứu&nbsp; →</button>
    </form>
    <p class="hint">Ví dụ: <code>CN081106-38HN</code> hoặc <code>CN081110-6HN</code></p>
    <div class="benefits"><span class="benefit"><i class="check">✓</i> Về HN dự kiến 2–3 ngày</span><span class="benefit"><i class="check">✓</i> Về SG dự kiến 4–6 ngày</span><span class="benefit"><i class="check">✓</i> Dữ liệu cập nhật từ vận hành</span></div>
  </section>
</main>
<section class="result-wrap hidden" id="resultWrap" aria-live="polite">
  <div class="notice hidden" id="message"></div>
  <article class="result hidden" id="result">
    <header class="order-head"><div><div class="eyebrow">Mã vận đơn</div><div class="order-code" id="resultCode"></div></div><button class="close" id="closeResult" aria-label="Đóng kết quả">×</button></header>
    <div class="summary"><div class="summary-card"><div class="label">Trạng thái hiện tại</div><div class="status-text" id="currentStatus"></div></div><div class="summary-card"><div class="label">Vị trí hiện tại</div><div class="location" id="currentLocation"></div></div></div>
    <div class="timeline-card"><ol class="timeline" id="timeline"></ol><p class="privacy">Thông tin tra cứu chỉ phản ánh dữ liệu vận hành đã được cập nhật. Nếu cần hỗ trợ, vui lòng liên hệ nhân viên phụ trách đơn hàng.</p></div>
  </article>
</section>
<script>
(() => {
  const SHEET_ID='1CM0In02I0TeN7lxY20G3hEHpU9uJAmGo187opGDzDB4';
  const WAREHOUSE_SHEETS=['Hàng vào kho TQ KT Thuỷ','Hàng vào kho TQ KT Yến'];
  const VEHICLE_SHEET='Theo Dõi Trạng Thái Xe';
  const $=s=>document.querySelector(s);
  let cache=null;
  const clean=v=>String(v??'').trim();
  const normalize=v=>clean(v).toUpperCase().replace(/\s+/g,'');
  const escapeHtml=v=>clean(v).replace(/[&<>"']/g,c=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
  function loadSheet(sheet){return new Promise((resolve,reject)=>{const cb='ktt_'+Math.random().toString(36).slice(2);const script=document.createElement('script');let done=false;const finish=(err,val)=>{if(done)return;done=true;delete window[cb];script.remove();err?reject(err):resolve(val)};window[cb]=res=>{if(res.status==='error')return finish(new Error('Không đọc được '+sheet));const cols=res.table.cols.map(c=>clean(c.label));const rows=res.table.rows.map(row=>row.c.map(c=>c?(c.f??c.v??''):'')).filter(r=>r.some(Boolean));finish(null,{cols,rows})};script.onerror=()=>finish(new Error('Không thể kết nối Google Sheets'));script.src=`https://docs.google.com/spreadsheets/d/${SHEET_ID}/gviz/tq?sheet=${encodeURIComponent(sheet)}&cacheBust=${Date.now()}&tqx=out:json;responseHandler:${cb}`;document.head.appendChild(script);setTimeout(()=>finish(new Error('Quá thời gian tải dữ liệu')),18000)})}
  function col(cols,...names){const n=cols.map(x=>normalize(x).replace(/[^A-ZÀ-Ỹ0-9]/g,''));for(const name of names){const wanted=normalize(name).replace(/[^A-ZÀ-Ỹ0-9]/g,'');const exact=n.findIndex(x=>x===wanted);if(exact>=0)return exact}for(const name of names){const wanted=normalize(name).replace(/[^A-ZÀ-Ỹ0-9]/g,'');const partial=n.findIndex(x=>x.includes(wanted));if(partial>=0)return partial}return -1}
  function value(row,i){return i>=0?clean(row[i]):''}
  function parseDate(v){if(v instanceof Date)return v;const s=clean(v);let m=s.match(/^(\d{1,2})[\/.\-](\d{1,2})[\/.\-](\d{2,4})$/);if(!m)return null;let y=+m[3];if(y<100)y+=2000;const d=new Date(y,+m[2]-1,+m[1]);return Number.isNaN(+d)?null:d}
  function dateText(v){const d=parseDate(v);return d?d.toLocaleDateString('vi-VN'):(clean(v)||'—')}
  function dateFromVehicle(v){const m=clean(v).match(/(?:^|[-.])(\d{1,2})[.\/-](\d{1,2})$/);if(!m)return '';return `${m[1]}/${m[2]}/${new Date().getFullYear()}`}
  async function getData(force=false){if(cache&&!force)return cache;const [a,b,vehicles]=await Promise.all([...WAREHOUSE_SHEETS.map(loadSheet),loadSheet(VEHICLE_SHEET)]);cache={warehouses:[a,b],vehicles};return cache}
  function findOrder(data,code){for(const sheet of data.warehouses){const iCode=col(sheet.cols,'MÃ HÀNG');const row=sheet.rows.find(r=>normalize(value(r,iCode))===normalize(code));if(row){return {row,cols:sheet.cols,source:sheet}}}return null}
  function buildTracking(found,data){const {row,cols}=found;const iIn=col(cols,'NGÀY/ THÁNG','NGÀY VÀO KHO');const iDelivery=col(cols,'NGÀY TRẢ KHÁCH');const iLoad=col(cols,'NGÀY BỐC');const iVehicle=col(cols,'BIỂN SỐ XE/ CỬA KHẨU','BIỂN SỐ XE');const entered=value(row,iIn),delivered=value(row,iDelivery),vehicle=value(row,iVehicle),loaded=value(row,iLoad)||dateFromVehicle(vehicle);const vc=data.vehicles;const iv=col(vc.cols,'BIỂN SỐ XE');const vehicleRow=vehicle?vc.rows.find(r=>normalize(value(r,iv))===normalize(vehicle)):null;const vehicleStatus=vehicleRow?value(vehicleRow,col(vc.cols,'TRẠNG THÁI')):'';const isCustomsCleared=normalize(vehicleStatus)==='ĐÃTHÔNGQUAN';const customs=isCustomsCleared&&vehicleRow?value(vehicleRow,col(vc.cols,'NGÀY THÔNG QUAN')):'';const hanoi=vehicleRow?value(vehicleRow,col(vc.cols,'Ngày hạ kho HN','NGÀY HẠ KHO HN')):'';
    const steps=[{key:'warehouse',done:!!entered,title:'Đã nhận hàng tại kho Trung Quốc',date:entered,detail:'Hàng đã được ghi nhận trên hệ thống kho.'},{key:'loaded',done:!!(loaded||vehicle),title:loaded||vehicle?'Đã bốc xe':'Chờ bốc xe',date:loaded,detail:vehicle?`Xe: ${vehicle}`:'Đang chờ sắp xếp xe vận chuyển.'},{key:'customs',done:!!customs,title:customs?'Đã thông quan':'Chờ thông quan',date:customs,detail:customs?'Xe đã được xác nhận ĐÃ THÔNG QUAN.':'Cập nhật khi trạng thái xe là ĐÃ THÔNG QUAN.'},{key:'hanoi',done:!!hanoi,title:hanoi?'Đã về kho Hà Nội':'Chờ về kho Hà Nội',date:hanoi,detail:hanoi?'Hàng đã được hạ tại kho Hà Nội.':'Cập nhật khi cột Ngày hạ kho HN có dữ liệu.'},{key:'delivered',done:!!delivered,title:delivered?'Đã giao hàng':'Chờ giao hàng',date:delivered,detail:delivered?'Đơn hàng đã được giao tới khách hàng.':'Liên hệ nhân viên phụ trách nếu cần hẹn giao.'}];
    let activeIndex=0;steps.forEach((step,index)=>{if(step.done)activeIndex=index});const current=steps[activeIndex];const location=delivered?'Đã giao tới khách hàng':hanoi?'Kho Hà Nội':customs?'Đang vận chuyển về Hà Nội':loaded||vehicle?'Trên tuyến Trung Quốc – Việt Nam':'Kho Trung Quốc';return {steps,activeIndex,current,location,vehicle}
  }
  function showMessage(title,text){$('#result').classList.add('hidden');const m=$('#message');m.innerHTML=`<div class="error-icon">!</div><h2>${escapeHtml(title)}</h2><p>${escapeHtml(text)}</p>`;m.classList.remove('hidden');$('#resultWrap').classList.remove('hidden');m.scrollIntoView({behavior:'smooth',block:'center'})}
  function showResult(code,tracking){$('#message').classList.add('hidden');$('#resultCode').textContent=code;$('#currentStatus').textContent=tracking.current.title;$('#currentLocation').textContent=tracking.location;$('#timeline').innerHTML=tracking.steps.map((x,i)=>{const active=i===tracking.activeIndex;return `<li class="event ${x.done?'done':'pending'} ${active?'active':''}"><span class="dot"></span><div class="event-time">${x.date?dateText(x.date):(x.done?'Đã cập nhật':'Dự kiến')}</div><div class="event-title">${escapeHtml(x.title)}</div><div class="event-detail">${escapeHtml(x.detail)}</div></li>`}).join('');$('#result').classList.remove('hidden');$('#resultWrap').classList.remove('hidden');$('#resultWrap').scrollIntoView({behavior:'smooth',block:'start'})}
  $('#searchForm').addEventListener('submit',async e=>{e.preventDefault();const code=clean($('#orderInput').value);if(!code)return showMessage('Vui lòng nhập mã vận đơn','Ví dụ: CN081106-38HN.');const btn=$('#searchButton');btn.disabled=true;btn.textContent='Đang đồng bộ…';try{const data=await getData(true);const found=findOrder(data,code);if(!found)showMessage('Không tìm thấy mã vận đơn',`Chưa có dữ liệu cho mã ${code}. Vui lòng kiểm tra lại ký tự hoặc liên hệ nhân viên phụ trách.`);else showResult(value(found.row,col(found.cols,'MÃ HÀNG')),buildTracking(found,data))}catch(err){console.error(err);showMessage('Chưa tải được dữ liệu','Vui lòng kiểm tra kết nối mạng và thử lại sau ít phút.')}finally{btn.disabled=false;btn.textContent='Tra cứu  →'}});
  $('#closeResult').addEventListener('click',()=>{$('#resultWrap').classList.add('hidden');$('#orderInput').focus()});
  const q=new URLSearchParams(location.search).get('code');if(q){$('#orderInput').value=q;$('#searchForm').requestSubmit()}
})();
</script>
</body>
</html>
