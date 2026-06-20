<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <title> تجربة عبير لحج 1447 هـ </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <!-- Remix Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css">

    <!-- Material Design Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <style>
        @font-face {
            font-family: 'TheYearofHandicrafts';
            src: url('/fonts/TheYearofHandicrafts-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        *, body { font-family: 'IBM Plex Sans Arabic', sans-serif; }

        h1, h2, h3, h4, h5, h6 { font-family: 'TheYearofHandicrafts', serif; letter-spacing: 0.01em; }

        /* ======== CSS Variables ======== */
        :root {
            --tb-white: #fff;
            --tb-success: #22c55e;
            --tb-danger: #ef4444;
            --tb-info: #06b6d4;
            --tb-dark: #1e293b;
            --tb-brand: #05AABB;
            --tb-radius: 14px;
            --tb-shadow-sm: 0 1px 3px rgba(0,0,0,0.07), 0 1px 2px rgba(0,0,0,0.04);
            --tb-shadow-md: 0 4px 12px rgba(0,0,0,0.08), 0 2px 4px rgba(0,0,0,0.04);
            --tb-shadow-lg: 0 10px 24px rgba(0,0,0,0.09), 0 4px 8px rgba(0,0,0,0.05);
        }

        /* ======== Utilities ======== */
        .fs-2xs { font-size: 0.7rem; }

        /* ======== Breadcrumb ======== */
        .page-title-box { padding: 16px 0 10px; }
        .page-title-box h4 { font-size: 1.15rem; font-weight: 700; margin: 0; color: #1e293b; }
        .breadcrumb { margin: 0; }
        .breadcrumb-item + .breadcrumb-item::before { content: "/"; }
        .breadcrumb-item a { color: #64748b; text-decoration: none; }
        .breadcrumb-item.active { color: #94a3b8; }

        /* ======== Logo & Title ======== */
        .mv2-org-identity {
            position: absolute;
            bottom: -35px;
            right: 30px;
            display: flex;
            align-items: center;
            gap: 14px;
            z-index: 3;
        }
        .mv2-org-title {
            color: #1e293b;
            font-weight: 700;
            font-size: 1.2rem;
            margin: 0;
            text-shadow: 0 1px 2px rgba(255,255,255,0.8);
        }
        .mv2-org-logo {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #fff;
            object-fit: cover;
            box-shadow: 0 2px 12px rgba(5,170,187,0.25), 0 0 0 3px rgba(255,255,255,0.9);
        }
        .mv2-header-bar {
            height: 95px;
            border-bottom: 1px solid rgba(0,0,0,0.06);
            position: relative;
            border-top-left-radius: var(--tb-radius);
            border-top-right-radius: var(--tb-radius);
        }
        .mv2-card .card-body, .mv2-filters { overflow: visible; }

        /* ======== Main Card ======== */
        .mv2-card {
            border: none;
            border-radius: var(--tb-radius);
            overflow: visible;
            box-shadow: var(--tb-shadow-md);
        }

        /* ======== Filters ======== */
        .mv2-filters .row > .col { min-width: 0; flex: 1 1 0; }
        .mv2-filters label {
            font-size: 0.82rem;
            color: #475569;
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
            text-align: right;
        }
        .mv2-filters .form-select,
        .mv2-filters .form-control {
            font-size: 0.82rem;
            border-radius: 10px;
            height: 40px;
            border-color: #e2e8f0;
            background-color: #f8fafc;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .mv2-filters .form-select:focus,
        .mv2-filters .form-control:focus {
            border-color: var(--tb-brand);
            box-shadow: 0 0 0 3px rgba(5,170,187,0.12);
        }

        /* ======== Tabs ======== */
        .mv2-tabs { flex-wrap: nowrap; overflow-x: auto; scrollbar-width: none; }
        .mv2-tabs::-webkit-scrollbar { display: none; }
        .mv2-tabs .nav-link {
            background: transparent !important;
            border: none;
            border-bottom: 3px solid transparent;
            border-radius: 0 !important;
            color: #94a3b8;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 10px 18px;
            white-space: nowrap;
            transition: color 0.2s;
        }
        .mv2-tabs .nav-link:hover { color: #64748b; }
        .mv2-tabs .nav-link.active {
            border-bottom-color: var(--tb-brand) !important;
            color: var(--tb-brand) !important;
        }
        .mv2-tabs .tab-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 20px;
            height: 20px;
            border-radius: 10px;
            font-size: 0.65rem;
            font-weight: 700;
            padding: 0 6px;
            margin-right: 4px;
            background: #f1f5f9;
            color: #64748b;
        }
        .mv2-tabs .nav-link.active .tab-badge { background: var(--tb-brand); color: #fff; }

        /* ======== Stat Cards ======== */
        .mv2-stat-cards { display: flex; gap: 12px; flex-wrap: wrap; }
        .mv2-stat-card {
            flex: 1;
            min-width: 140px;
            border-radius: 12px;
            padding: 16px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            background: #fff;
            border: 1px solid rgba(0,0,0,0.05);
            cursor: pointer;
            box-shadow: var(--tb-shadow-sm);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .mv2-stat-card:hover { transform: translateY(-3px); box-shadow: var(--tb-shadow-md); }
        .mv2-stat-card .stat-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }
        .mv2-stat-card .stat-num { font-size: 1.6rem; font-weight: 700; line-height: 1.1; }
        .mv2-stat-card .stat-txt { font-size: 0.72rem; color: #94a3b8; margin-top: 2px; }

        /* ======== View Toggle ======== */
        .mv2-view-toggle { border-radius: 10px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: var(--tb-shadow-sm); }
        .mv2-view-toggle .btn {
            padding: 8px 16px;
            font-size: 1.2rem;
            border: none;
            color: #94a3b8;
            background: #fff;
            border-radius: 0 !important;
            transition: color 0.2s, background 0.2s;
        }
        .mv2-view-toggle .btn-check:checked + .btn { background: #1e293b; color: #fff; }

        /* ======== Meal Card ======== */
        .mv2-meal-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 12px;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: var(--tb-shadow-sm);
            transition: box-shadow 0.2s;
        }
        .mv2-meal-card:hover { box-shadow: var(--tb-shadow-md); }
        .mv2-meal-info-bar {
            padding: 14px 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 0.85rem;
            color: #334155;
            border-radius: 12px 12px 0 0;
            flex-wrap: wrap;
        }
        .mv2-meal-info-bar .info-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
        }
        .mv2-meal-info-bar .info-item i { font-size: 1.05rem; color: #64748b; }
        .mv2-meal-info-bar .info-actions {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .mv2-meal-info-bar .info-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1.5px solid rgba(0,0,0,0.12);
            background: rgba(255,255,255,0.7);
            color: #475569;
            font-size: 1rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, border-color 0.2s, transform 0.15s;
            padding: 0;
            text-decoration: none;
        }
        .mv2-meal-info-bar .info-btn:hover { background: #fff; border-color: #64748b; transform: scale(1.08); }
        .mv2-meal-info-bar .info-btn-end { order: 99; }
        .mv2-meal-info-bar .problem-badge {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.78rem;
            display: flex;
            align-items: center;
            gap: 4px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(239,68,68,0.3);
        }

        /* ======== Timeline ======== */
        .step-container {
            position: relative;
            flex: 0 0 auto;
        }
        .step-container:after {
            content: "";
            position: absolute;
            top: 50%;
            right: calc(-50% + 14px);
            width: 90%;
            height: 4px;
            border-radius: 2px;
        }
        .meal-steps .circle {
            cursor: pointer;
            position: relative;
            z-index: 5;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        .meal-steps .circle:hover { transform: scale(1.15); }
        .not_started .circle { cursor: default; }
        .not_started .circle:hover { transform: none; }
        .meal-steps>div:nth-child(2) .step-container:after { display: none; }

        /* ======== Stage Status Colors ======== */
        .done .mdi-check { color: var(--tb-white); }
        .done.on-time .circle { background-color: var(--tb-success); border-color: var(--tb-success) !important; box-shadow: 0 2px 8px rgba(34,197,94,0.35); }
        .done.on-time .step-container:after { background-color: var(--tb-success); }
        .done.on-time .time { color: var(--tb-success); }
        .done.late .circle { background-color: var(--tb-danger); border-color: var(--tb-danger) !important; box-shadow: 0 2px 8px rgba(239,68,68,0.35); }
        .done.late .step-container:after { background-color: var(--tb-danger); }
        .done.late .time { color: var(--tb-danger); }
        .in_progress.on-time .step-container:after { background-color: var(--tb-info); }
        .in_progress.on-time .circle { background-color: var(--tb-white); border-color: var(--tb-info) !important; box-shadow: 0 2px 8px rgba(6,182,212,0.3); }
        .in_progress.on-time .time { color: var(--tb-info); }
        .in_progress.on-time .mdi-check { display: none; }
        .in_progress.late .circle { background-color: var(--tb-white); border-color: var(--tb-danger) !important; box-shadow: 0 2px 8px rgba(239,68,68,0.3); }
        .in_progress.late .step-container:after { background-color: var(--tb-danger); }
        .in_progress.late .time { color: var(--tb-danger); }
        .in_progress.late .mdi-check { display: none; }
        .not_started .time { color: #cbd5e1 !important; }
        .not_started .circle { background-color: #f1f5f9 !important; border-color: #e2e8f0 !important; }
        .not_started .step-container:after { background-color: #e2e8f0; }
        .not_started .mdi-check { display: none; }

        /* ======== Nationality Group ======== */
        .mv2-nat-group { margin-bottom: 16px; border: 1px solid rgba(0,0,0,0.06); border-radius: var(--tb-radius); overflow: hidden; box-shadow: var(--tb-shadow-sm); }
        .mv2-nat-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 20px;
            background: #f8fafc;
            cursor: pointer;
            user-select: none;
            transition: background 0.2s;
            border-bottom: 1px solid rgba(0,0,0,0.04);
        }
        .mv2-nat-header:hover { background: #f1f5f9; }
        .mv2-nat-header .nat-flag { font-size: 1.5rem; }
        .mv2-nat-header .nat-name { font-weight: 700; font-size: 0.95rem; color: #1e293b; }
        .mv2-nat-header .nat-count { font-size: 0.78rem; color: #64748b; background: #e2e8f0; padding: 3px 10px; border-radius: 12px; }
        .mv2-nat-header .nat-stats { margin-right: auto; display: flex; gap: 12px; font-size: 0.75rem; }
        .mv2-nat-header .nat-stats .ns-item { display: flex; align-items: center; gap: 4px; color: #475569; }
        .mv2-nat-header .nat-stats .ns-dot { width: 8px; height: 8px; border-radius: 50%; }
        .mv2-nat-header .nat-arrow { font-size: 1.2rem; color: #94a3b8; transition: transform 0.3s; }
        .mv2-nat-header.collapsed .nat-arrow { transform: rotate(-90deg); }
        .mv2-nat-body { transition: max-height 0.4s ease, opacity 0.3s ease; max-height: 2000px; opacity: 1; overflow: scroll; padding: 12px; background: #fafbfc; }
        .mv2-nat-body.collapsed { max-height: 0; opacity: 0; padding: 0; }

        /* ======== Progress Bar ======== */
        .mv2-progress-wrap { flex: 1; max-width: 200px; display: flex; align-items: center; gap: 8px; }
        .mv2-progress-bar { flex: 1; height: 7px; background: rgba(0,0,0,0.06); border-radius: 4px; overflow: hidden; }
        .mv2-progress-bar .bar-fill { height: 100%; border-radius: 4px; transition: width 0.8s cubic-bezier(0.4,0,0.2,1); }
        .mv2-progress-pct { font-size: 0.75rem; font-weight: 700; min-width: 35px; text-align: center; }

        /* ======== Stage answers ======== */
        .meal_answers {
            max-height: 0; opacity: 0; overflow: hidden;
            transition: max-height 0.6s ease, opacity 0.4s ease;
            pointer-events: none; padding: 0;
        }
        .meal_answers.show {
            max-height: 320px; opacity: 1; overflow-y: auto;
            pointer-events: auto; padding: 12px 16px; border-radius: 10px;
            background: #f8fafc; margin: 0 12px 12px;
        }
        .meal_answers .ans-title { font-weight: 700; color: var(--tb-brand); font-size: 0.9rem; margin-bottom: 10px; }
        .meal_answers .ans-row {
            display: flex; justify-content: space-between;
            padding: 8px 0; border-bottom: 1px solid #f1f5f9;
            font-size: 0.82rem; direction: rtl; text-align: right;
        }
        .meal_answers .ans-row:last-child { border: none; }
        .meal_answers .ans-label { color: #475569; font-weight: 600; }
        .meal_answers .ans-value { color: #1e293b; }

        /* ======== Legend ======== */
        .mv2-gantt-legend { display: flex; gap: 20px; justify-content: flex-start; flex-wrap: wrap; align-items: center; }
        .mv2-gantt-legend .leg-item { display: flex; align-items: center; gap: 5px; font-size: 0.75rem; color: #64748b; }
        .mv2-gantt-legend .leg-dot { width: 10px; height: 10px; border-radius: 50%; }

        /* ======== Design System Tokens ======== */
        :root{--P:#033A40;--G:#CAB272;--S:#2dcb73;--D:#EE6363;--I:#4ab0c1;--W:#f6b749;--Pr:3,58,64;--Gr:202,178,114}
        .ds,.dc-h,.dsh,.db,.dt{direction:rtl;text-align:right}
        .stat-grid{display:grid;gap:8px;grid-template-columns:repeat(2,1fr)}
        @media(min-width:768px){.stat-grid{grid-template-columns:repeat(3,1fr)}}
        @media(min-width:1200px){.stat-grid{grid-template-columns:repeat(5,1fr)}}

        /* Stat row card */
        .ds{background:#fff;border-radius:12px;box-shadow:0 1px 3px rgba(0,0,0,.06),0 1px 2px rgba(0,0,0,.04);padding:14px 16px;display:flex;align-items:center;gap:12px;flex-direction:row;position:relative;overflow:hidden;transition:transform .2s,box-shadow .2s;height:100%}
        .ds:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(var(--Pr),.1)}
        .ds::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(to left,var(--a),var(--b))}
        .ds .di{width:42px;height:42px;border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:1.15rem;flex-shrink:0}
        .ds .dv{font-size:1.25rem;font-weight:700;color:#033A40;line-height:1.1;display:block}
        .ds .dl{font-size:.65rem;color:#94a3b8;font-weight:600;margin-top:1px}

        /* Chart/table card */
        .dc{background:#fff;border-radius:14px;box-shadow:0 1px 3px rgba(0,0,0,.06),0 1px 2px rgba(0,0,0,.04);overflow:hidden;height:100%;display:flex;flex-direction:column;border:1px solid rgba(0,0,0,.04)}
        .dc .table-responsive{flex:1;overflow-y:auto;max-height:370px}
        .dc-h{padding:14px 18px;border-bottom:1px solid #f1f5f9;display:flex;align-items:center;gap:8px;background:linear-gradient(to left,#fff,#fafbfc)}
        .dc-h h6{margin:0;font-size:.82rem;font-weight:700;color:#033A40;display:flex;align-items:center;gap:6px}
        .dc-h h6 i{opacity:.45;font-size:1rem}
        .dc-b{padding:14px 18px}

        /* Table */
        .dt{direction:rtl;text-align:right}
        .dt thead th{background:#f8fafc;font-size:.67rem;font-weight:700;color:#94a3b8;padding:9px 12px;border:none!important;text-align:right;position:sticky;top:0;z-index:1;letter-spacing:0.02em;text-transform:uppercase}
        .dt tbody td{padding:9px 12px;font-size:.78rem;vertical-align:middle;border-color:#f1f5f9;text-align:right}
        .dt tbody tr{transition:background .15s}
        .dt tbody tr:hover{background:#f8fafc}

        /* Badge */
        .db{display:inline-flex;align-items:center;gap:4px;padding:3px 9px;border-radius:6px;font-size:.68rem;font-weight:700;direction:rtl}
        .db i{width:5px;height:5px;border-radius:50%;flex-shrink:0}

        /* Section title */
        .dsh{font-size:.82rem;font-weight:700;color:#033A40;margin:0 0 10px;display:flex;align-items:center;gap:6px}
        .dsh::after{content:'';flex:1;height:1px;background:linear-gradient(to left,#e2e8f0,transparent);margin-right:0;margin-left:6px}
        .dsh i{font-size:1rem;opacity:.6}

        /* Org tabs */
        .org-tabs{direction:rtl}
        .org-tabs .nav-link{font-size:.78rem;font-weight:600;color:#64748b;border:1.5px solid #e2e8f0;border-radius:10px!important;padding:8px 18px;display:inline-flex;align-items:center;gap:6px;transition:all .2s;background:#fff;box-shadow:0 1px 2px rgba(0,0,0,.04)}
        .org-tabs .nav-link i{font-size:.9rem;opacity:.5;transition:opacity .2s}
        .org-tabs .nav-link:hover{border-color:rgba(202,178,114,.6);color:#033A40;background:rgba(202,178,114,.05);transform:translateY(-1px)}
        .org-tabs .nav-link.active{background:linear-gradient(135deg,#033A40,#055a64)!important;color:#fff!important;border-color:transparent!important;box-shadow:0 4px 12px rgba(3,58,64,.25)}
        .org-tabs .nav-link.active i{opacity:1}

        /* Group stat card */
        .grp-card{background:#fff;border-radius:14px;box-shadow:0 2px 8px rgba(0,0,0,.06),0 1px 3px rgba(0,0,0,.04);overflow:hidden;position:relative;display:flex;flex-direction:column;height:100%;container-type:inline-size;transition:transform .25s ease,box-shadow .25s ease;animation:grpIn .5s cubic-bezier(.22,1,.36,1) both;border:1px solid rgba(0,0,0,.04)}
        .grp-card:hover{transform:translateY(-5px);box-shadow:0 12px 28px rgba(0,0,0,.1),0 4px 8px rgba(0,0,0,.05)}
        .grp-card::before{content:'';position:absolute;top:0;left:0;right:0;height:60px;background:linear-gradient(180deg,rgba(var(--Pr),.04) 0%,transparent 100%);pointer-events:none}
        .grp-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(to left,var(--a),var(--b))}
        .grp-row > div:nth-child(1) .grp-card{animation-delay:0s}
        .grp-row > div:nth-child(2) .grp-card{animation-delay:.08s}
        .grp-row > div:nth-child(3) .grp-card{animation-delay:.16s}
        .grp-row > div:nth-child(4) .grp-card{animation-delay:.24s}
        @keyframes grpIn{from{opacity:0;transform:translateY(24px)}to{opacity:1;transform:translateY(0)}}
        .grp-top{display:flex;align-items:center;direction:rtl;padding:18px 18px 10px;gap:12px}
        .grp-icon{width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;flex-shrink:0}
        .grp-lbl{font-size:.85rem;font-weight:700;color:#475569}
        .grp-val{font-size:1.7rem;font-weight:800;color:#033A40;line-height:1;flex-shrink:0;margin-right:auto;letter-spacing:-0.5px}
        .grp-details{display:grid;gap:7px;padding:0 12px 14px;flex:1}
        .grp-details-4{grid-template-columns:repeat(2,1fr)}
        .grp-details-3{grid-template-columns:repeat(2,1fr)}
        @container (max-width:280px){.grp-details-4,.grp-details-3{grid-template-columns:1fr}}
        .grp-mini{background:#f8fafc;border:1px solid #f1f5f9;border-radius:9px;padding:9px 11px;display:flex;flex-direction:column;align-items:flex-start;gap:3px;direction:rtl;transition:transform .2s ease,box-shadow .2s ease,background .2s ease;animation:miniIn .4s cubic-bezier(.22,1,.36,1) both}
        .grp-mini:hover{transform:translateY(-2px);box-shadow:0 4px 10px rgba(0,0,0,.08);background:#fff;border-color:#e2e8f0}
        .grp-details .grp-mini:nth-child(1){animation-delay:.3s}
        .grp-details .grp-mini:nth-child(2){animation-delay:.4s}
        .grp-details .grp-mini:nth-child(3){animation-delay:.5s}
        .grp-details .grp-mini:nth-child(4){animation-delay:.6s}
        @keyframes miniIn{from{opacity:0;transform:scale(.92)}to{opacity:1;transform:scale(1)}}
        .grp-mini-ic{width:22px;height:22px;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:.7rem;flex-shrink:0;margin-right:auto}
        .grp-mini-top{display:flex;align-items:center;gap:5px;direction:rtl;width:100%}
        .grp-mini-v{font-size:1.05rem;font-weight:700;color:#033A40;line-height:1.2}
        .grp-mini-l{font-size:.7rem;color:#94a3b8;font-weight:600}

        /* ======== Responsive ======== */
        @media (max-width: 767.98px) {
            .mv2-org-identity { right: 14px; gap: 10px; }
            .mv2-org-logo { width: 50px; height: 50px; }
            .mv2-org-title { font-size: 0.9rem; }
            .mv2-header-bar { height: 70px; }
            .card-body { padding-top: 40px !important; }
            .mv2-meal-info-bar { flex-direction: column; align-items: flex-start; gap: 8px; padding: 10px 14px; font-size: 0.78rem; }
            .mv2-meal-info-bar .info-actions { margin-left: 0; width: 100%; justify-content: flex-start; }
            .mv2-progress-wrap { max-width: 100%; width: 100%; }
            .mv2-stat-cards { flex-direction: column; }
            .mv2-stat-card { min-width: unset; }
            .mv2-nat-header { flex-wrap: wrap; gap: 8px; padding: 10px 14px; }
            .mv2-nat-header .nat-stats { margin-right: 0; width: 100%; }
            .mv2-tabs .nav-link { padding: 6px 10px; font-size: 0.78rem; }
        }

        /* ======== Hero Banner ======== */
        .page-hero {
            background: linear-gradient(135deg, #022e33 0%, #033A40 40%, #05AABB 100%);
            border-radius: 20px;
            padding: 36px 40px 32px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(3,58,64,0.3), 0 4px 12px rgba(3,58,64,0.15);
            direction: rtl;
        }
        .page-hero-deco {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }
        .page-hero-deco-1 {
            width: 320px; height: 320px;
            background: rgba(202,178,114,0.10);
            top: -100px; left: -80px;
        }
        .page-hero-deco-2 {
            width: 180px; height: 180px;
            background: rgba(255,255,255,0.05);
            bottom: -60px; right: 15%;
        }
        .page-hero-deco-3 {
            width: 80px; height: 80px;
            background: rgba(202,178,114,0.18);
            top: 20px; left: 30%;
        }
        .page-hero-inner { position: relative; z-index: 1; }
        .page-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(202,178,114,0.2);
            border: 1px solid rgba(202,178,114,0.45);
            color: #e8d5a0;
            padding: 5px 16px;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.02em;
        }
        .page-hero-title {
            color: #fff;
            font-size: 2rem;
            font-weight: 800;
            margin: 0 0 6px;
            line-height: 1.2;
            text-shadow: 0 2px 8px rgba(0,0,0,0.2);
            font-family: 'TheYearofHandicrafts', serif;
        }
        .page-hero-sub {
            color: rgba(255,255,255,0.65);
            font-size: 0.9rem;
            margin: 0 0 24px;
        }
        .page-hero-stats {
            display: flex;
            gap: 0;
            flex-wrap: wrap;
        }
        .page-hero-stat {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 12px 24px;
            border-left: 1px solid rgba(255,255,255,0.12);
            min-width: 90px;
        }
        .page-hero-stat:last-child { border-left: none; }
        .page-hero-stat:first-child { padding-right: 0; }
        .phs-val {
            font-size: 1.5rem;
            font-weight: 800;
            color: #CAB272;
            line-height: 1.1;
            letter-spacing: -0.5px;
        }
        .phs-lbl {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.55);
            font-weight: 600;
            margin-top: 2px;
        }
        @media (max-width: 767.98px) {
            .page-hero { padding: 24px 20px; }
            .page-hero-title { font-size: 1.4rem; }
            .page-hero-stat { padding: 8px 14px; }
            .phs-val { font-size: 1.2rem; }
            .page-hero-stats { gap: 0; }
        }

        /* ======== Improved Answers Panel ======== */
        .meal_answers.show {
            max-height: 420px !important;
            background: linear-gradient(160deg, #f0f9ff 0%, #f8fafc 100%) !important;
            border: 1px solid rgba(5,170,187,0.18) !important;
            box-shadow: 0 4px 24px rgba(5,170,187,0.10), inset 0 1px 0 rgba(255,255,255,0.8) !important;
            margin: 0 8px 12px !important;
            border-radius: 14px !important;
        }
        .meal_answers .ans-title {
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
            background: linear-gradient(to left, transparent, rgba(5,170,187,0.07)) !important;
            padding: 10px 14px !important;
            border-radius: 10px !important;
            border-right: 3px solid #05AABB !important;
            margin-bottom: 14px !important;
            font-size: 0.95rem !important;
            color: #033A40 !important;
        }
        .meal_answers .ans-row {
            background: rgba(255,255,255,0.7) !important;
            border-radius: 8px !important;
            margin-bottom: 6px !important;
            padding: 9px 12px !important;
            border: 1px solid rgba(226,232,240,0.8) !important;
            border-bottom: 1px solid rgba(226,232,240,0.8) !important;
            transition: background 0.15s !important;
        }
        .meal_answers .ans-row:hover { background: rgba(255,255,255,0.95) !important; }
        .meal_answers .ans-row:last-child { border: 1px solid rgba(226,232,240,0.8) !important; }
        .meal_answers .ans-label {
            color: #64748b !important;
            font-weight: 600 !important;
            font-size: 0.8rem !important;
        }
        .meal_answers .ans-value {
            color: #1e293b !important;
            font-weight: 500 !important;
            font-size: 0.82rem !important;
            max-width: 55% !important;
            text-align: left !important;
        }

        /* ======== Improved Nat Group ======== */
        .mv2-nat-header {
            background: linear-gradient(to left, #f8fafc, #f0f9ff) !important;
            border-bottom: 2px solid rgba(5,170,187,0.1) !important;
        }
        .mv2-nat-header:hover { background: linear-gradient(to left, #f1f5f9, #e8f7fb) !important; }

        /* ======== Improved Main Card Header ======== */
        .mv2-header-bar {
            height: 110px !important;
        }

        /* ======== Improved Section Divider ======== */
        .section-label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 18px 0 14px;
            direction: rtl;
        }
        .section-label-text {
            font-size: 0.78rem;
            font-weight: 700;
            color: #94a3b8;
            white-space: nowrap;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        .section-label-line {
            flex: 1;
            height: 1px;
            background: linear-gradient(to left, #e2e8f0, transparent);
        }
        .section-label-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: linear-gradient(135deg, #05AABB, #CAB272);
            flex-shrink: 0;
        }

        /* ======== Improved Meal Card Info Bar ======== */
        .mv2-meal-info-bar {
            border-bottom: 1px solid rgba(5,170,187,0.08) !important;
        }

        /* ======== Improved Body ======== */
        body {
            background: #e8eef5 !important;
            background-image:
                radial-gradient(ellipse at 10% 5%, rgba(5,170,187,0.09) 0%, transparent 45%),
                radial-gradient(ellipse at 90% 95%, rgba(202,178,114,0.08) 0%, transparent 45%),
                radial-gradient(ellipse at 50% 50%, rgba(3,58,64,0.03) 0%, transparent 70%) !important;
        }

        /* ======== Answer value styling for yes/no ======== */
        .ans-val-yes { color: #16a34a !important; font-weight: 700 !important; }
        .ans-val-no  { color: #dc2626 !important; font-weight: 700 !important; }

        /* ======== PASTEL THEME OVERRIDES ======== */

        /* Body */
        body {
            background: #f0eef8 !important;
            background-image:
                radial-gradient(ellipse at 15% 10%, rgba(180,210,240,0.35) 0%, transparent 50%),
                radial-gradient(ellipse at 85% 90%, rgba(202,178,220,0.2) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(240,235,255,0.5) 0%, transparent 70%) !important;
        }

        /* ---- Grp cards: pastel tinted backgrounds ---- */
        .grp-card { background: linear-gradient(160deg, #fdfcff 0%, #f8f5ff 100%) !important; }
        .grp-mini { background: linear-gradient(135deg, #f5f3ff 0%, #eef8fa 100%) !important; border-color: rgba(180,180,220,0.2) !important; }
        .grp-mini:hover { background: #fff !important; }
        .grp-lbl { color: #6b7a99 !important; }
        .grp-val { color: #3d4f6e !important; }
        .grp-mini-v { color: #3d4f6e !important; }
        .grp-mini-l { color: #9ba8c0 !important; }

        /* ---- Stat row cards (mv2-stat-card) ---- */
        .mv2-stat-cards .mv2-stat-card {
            background: linear-gradient(135deg, #fdfcff 0%, #f5f3ff 100%) !important;
            border-color: rgba(180,175,220,0.25) !important;
            box-shadow: 0 2px 10px rgba(140,130,200,0.08) !important;
        }
        .mv2-stat-card:hover { box-shadow: 0 6px 20px rgba(140,130,200,0.15) !important; }
        .mv2-stat-card .stat-txt { color: #9ba8c0 !important; }

        /* ---- Main card (mv2-card) ---- */
        .mv2-card { background: linear-gradient(160deg, #fdfcff 0%, #f8f6ff 100%) !important; }
        .mv2-header-bar {
            background: linear-gradient(110deg, #b2e8ed 0%, #d4c8f0 55%, #fce8ec 100%) !important;
        }
        .mv2-org-title { color: #2d3f5e !important; text-shadow: 0 1px 3px rgba(255,255,255,0.9) !important; }

        /* ---- Filters ---- */
        .mv2-filters .form-select,
        .mv2-filters .form-control {
            background-color: #f8f6ff !important;
            border-color: rgba(180,175,220,0.35) !important;
        }
        .mv2-filters label { color: #6b7a99 !important; }

        /* ---- Nat group ---- */
        .mv2-nat-group { border-color: rgba(180,175,220,0.3) !important; background: #fdfcff; }
        .mv2-nat-header {
            background: linear-gradient(to left, #edf0ff, #e8f7f9) !important;
            border-bottom: 1.5px solid rgba(140,160,220,0.2) !important;
        }
        .mv2-nat-header:hover { background: linear-gradient(to left, #e4e8ff, #d8f2f8) !important; }
        .mv2-nat-header .nat-name { color: #2d3f5e !important; }
        .mv2-nat-header .nat-count { background: #dde8f5 !important; color: #5a70a0 !important; }
        .mv2-nat-header .nat-arrow { color: #9ba8c0 !important; }
        .mv2-nat-body { background: #faf9ff !important; }

        /* ---- Meal card ---- */
        .mv2-meal-card { background: #fdfcff !important; border-color: rgba(180,175,220,0.2) !important; }
        .mv2-meal-info-bar {
            background: linear-gradient(to left, #fdfcff 0%, #e8f7f9 100%) !important;
            border-bottom: 1px solid rgba(140,200,220,0.2) !important;
        }
        .mv2-meal-info-bar .info-item { color: #4a5a78 !important; }
        .mv2-meal-info-bar .info-item i { color: #85a0c0 !important; }
        .mv2-meal-info-bar .info-btn {
            border-color: rgba(160,175,220,0.3) !important;
            background: rgba(240,238,255,0.8) !important;
            color: #6b7a99 !important;
        }
        .mv2-meal-info-bar .info-btn:hover { background: #fff !important; border-color: #9ba8c0 !important; }

        /* ---- Progress bar ---- */
        .mv2-progress-bar { background: rgba(180,175,220,0.2) !important; }

        /* ---- Answers panel ---- */
        .meal_answers.show {
            background: linear-gradient(160deg, #eef7ff 0%, #f5f3ff 100%) !important;
            border: 1.5px solid rgba(140,175,220,0.25) !important;
            box-shadow: 0 6px 28px rgba(120,140,200,0.1), inset 0 1px 0 rgba(255,255,255,0.9) !important;
        }
        .meal_answers .ans-title {
            background: linear-gradient(to left, transparent, rgba(140,195,220,0.12)) !important;
            border-right: 3px solid #7ecbd4 !important;
            color: #2d4a6e !important;
        }
        .meal_answers .ans-row {
            background: rgba(255,255,255,0.75) !important;
            border: 1px solid rgba(200,210,235,0.6) !important;
            border-radius: 10px !important;
        }
        .meal_answers .ans-row:hover { background: rgba(255,255,255,0.98) !important; }
        .meal_answers .ans-label { color: #7888a8 !important; }
        .meal_answers .ans-value { color: #2d3f5e !important; }
        .ans-val-yes {
            color: #1a8a4a !important;
            background: #e6f7ee !important;
            padding: 2px 10px !important;
            border-radius: 12px !important;
            font-size: 0.78rem !important;
            border: 1px solid #b8e8cc !important;
        }
        .ans-val-no {
            color: #c0394a !important;
            background: #fce8ec !important;
            padding: 2px 10px !important;
            border-radius: 12px !important;
            font-size: 0.78rem !important;
            border: 1px solid #f8c8d0 !important;
        }

        /* ---- Section divider ---- */
        .section-label-text { color: #9ba8c0 !important; }
        .section-label-line { background: linear-gradient(to left, rgba(180,175,220,0.4), transparent) !important; }

        /* ---- Pie chart label area ---- */
        [style*="تقييم التجربة"] { color: #6b7a99 !important; }

        /* ---- Timeline steps text ---- */
        .step { color: #4a5a78 !important; font-size: 0.8rem !important; }
        .meal-steps .fw-normal { color: #6b7a99 !important; }

        /* ---- Hero pastel stats pill border ---- */
        .page-hero-stat { border-left-color: rgba(255,255,255,0.18) !important; }

        /* ---- Card/dc cards ---- */
        .dc { background: linear-gradient(160deg, #fdfcff, #f8f5ff) !important; border-color: rgba(180,175,220,0.2) !important; }
        .dc-h { background: linear-gradient(to left, #fdfcff, #f5f3ff) !important; border-bottom-color: rgba(180,175,220,0.2) !important; }
        .dc-h h6 { color: #3d4f6e !important; }

        /* ---- ds stat cards ---- */
        .ds { background: linear-gradient(135deg, #fdfcff, #f5f3ff) !important; }
        .ds .dv { color: #3d4f6e !important; }
        .ds .dl { color: #9ba8c0 !important; }

        /* ---- Scrollbar pastel ---- */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f0eef8; border-radius: 3px; }
        ::-webkit-scrollbar-thumb { background: #c5c0e0; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #a09ac8; }
    </style>
</head>

<body style="padding: 28px 28px 48px; min-height: 100vh;">

<!-- Hero Banner -->
<div class="page-hero mb-4">
    <div class="page-hero-inner">
        <h1 class="page-hero-title">تجربـة عبيـر لحـج 1447 هـ</h1>
        <p class="page-hero-sub">تقرير الموسم</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><span class="phs-val">350+</span><span class="phs-lbl">ساعة عمل</span></div>
            <div class="page-hero-stat"><span class="phs-val">800K+</span><span class="phs-lbl">وجبة</span></div>
            <div class="page-hero-stat"><span class="phs-val">187</span><span class="phs-lbl">بلاغ</span></div>
            <div class="page-hero-stat"><span class="phs-val">86.65%</span><span class="phs-lbl">نسبة الرضا</span></div>
        </div>
    </div>
    <div class="page-hero-deco page-hero-deco-1"></div>
    <div class="page-hero-deco page-hero-deco-2"></div>
    <div class="page-hero-deco page-hero-deco-3"></div>
</div>

<!-- ===== Stat Grid Cards ===== -->

<div class="row g-2 mb-2 grp-row">
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="grp-card" style="--a:#033A40;--b:#CAB272">
            <div class="grp-top">
                <div class="grp-icon" style="background:rgba(3,58,64,.08);color:#033A40"><i class="mdi mdi-reorder-horizontal"></i></div>
                <span class="grp-lbl">الطلبات</span><span class="grp-val">24</span>
            </div>
            <div class="grp-details grp-details-4">
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">49</span><div class="grp-mini-ic" style="background:rgba(3,58,64,.06);color:#033A40"><i class="mdi mdi-map-marker-radius-outline"></i></div></div><span class="grp-mini-l">القطاعات</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">134,375</span><div class="grp-mini-ic" style="background:rgba(45,203,115,.06);color:#2dcb73"><i class="mdi mdi-account-group-outline"></i></div></div><span class="grp-mini-l">عدد الحجاج</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">72</span><div class="grp-mini-ic" style="background:rgba(202,178,114,.1);color:#CAB272"><i class="mdi mdi-account-outline"></i></div></div><span class="grp-mini-l">المراقبين</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">16</span><div class="grp-mini-ic" style="background:rgba(74,176,193,.08);color:#4ab0c1"><i class="mdi mdi-office-building-cog-outline"></i></div></div><span class="grp-mini-l">المنشآت</span></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="grp-card" style="--a:#EE6363;--b:#F0A44B">
            <div class="grp-top">
                <div class="grp-icon" style="background:rgba(238,99,99,.08);color:#EE6363"><i class="mdi mdi-ticket-confirmation-outline"></i></div>
                <span class="grp-lbl">البلاغات</span><span class="grp-val">187</span>
            </div>
            <div class="grp-details grp-details-4">
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">0</span><div class="grp-mini-ic" style="background:rgba(238,99,99,.08);color:#EE6363"><i class="mdi mdi-alert-circle-outline"></i></div></div><span class="grp-mini-l">جديد</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">0</span><div class="grp-mini-ic" style="background:rgba(246,183,73,.08);color:#f6b749"><i class="mdi mdi-clock-outline"></i></div></div><span class="grp-mini-l">قيد المراجعة</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">0</span><div class="grp-mini-ic" style="background:rgba(74,176,193,.08);color:#4ab0c1"><i class="mdi mdi-progress-wrench"></i></div></div><span class="grp-mini-l">قيد التنفيذ</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">187</span><div class="grp-mini-ic" style="background:rgba(45,203,115,.08);color:#2dcb73"><i class="mdi mdi-check-circle-outline"></i></div></div><span class="grp-mini-l">مغلق</span></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="grp-card" style="--a:#4ab0c1;--b:#033A40">
            <div class="grp-top">
                <div class="grp-icon" style="background:rgba(74,176,193,.08);color:#4ab0c1"><i class="mdi mdi-truck-outline"></i></div>
                <span class="grp-lbl">الإسنادات</span><span class="grp-val">6</span>
            </div>
            <div class="grp-details grp-details-4">
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">3</span><div class="grp-mini-ic" style="background:rgba(246,183,73,.08);color:#f6b749"><i class="mdi mdi-food-variant"></i></div></div><span class="grp-mini-l">إجمالي الوجبات</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">3</span><div class="grp-mini-ic" style="background:rgba(74,176,193,.08);color:#4ab0c1"><i class="mdi mdi-water"></i></div></div><span class="grp-mini-l">إجمالي المياه</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">1,699</span><div class="grp-mini-ic" style="background:rgba(45,203,115,.08);color:#2dcb73"><i class="mdi mdi-food-variant"></i></div></div><span class="grp-mini-l">الوجبات مستلمة</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">0</span><div class="grp-mini-ic" style="background:rgba(45,203,115,.08);color:#2dcb73"><i class="mdi mdi-water-check"></i></div></div><span class="grp-mini-l">مياه مستلمة</span></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="grp-card" style="--a:#2dcb73;--b:#CAB272">
            <div class="grp-top">
                <div class="grp-icon" style="background:rgba(45,203,115,.08);color:#2dcb73"><i class="mdi mdi-silverware-fork-knife"></i></div>
                <span class="grp-lbl">الوجبات</span><span class="grp-val">1,896,707</span>
            </div>
            <div class="grp-details grp-details-4">
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">1,753,069</span><div class="grp-mini-ic" style="background:rgba(246,183,73,.08);color:#f6b749"><i class="mdi mdi-truck-check-outline"></i></div></div><span class="grp-mini-l">الوجبات المسلمة</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">335</span><div class="grp-mini-ic" style="background:rgba(202,178,114,.1);color:#CAB272"><i class="mdi mdi-book-open-variant"></i></div></div><span class="grp-mini-l">قوائم الطعام</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">1,896,707</span><div class="grp-mini-ic" style="background:rgba(45,203,115,.08);color:#2dcb73"><i class="mdi mdi-silverware-fork-knife"></i></div></div><span class="grp-mini-l">الوجبات المجدولة</span></div>
                <div class="grp-mini"><div class="grp-mini-top"><span class="grp-mini-v">18</span><div class="grp-mini-ic" style="background:rgba(238,99,99,.08);color:#EE6363"><i class="mdi mdi-flag-variant-outline"></i></div></div><span class="grp-mini-l">الجنسيات</span></div>
            </div>
        </div>
    </div>
</div>

<!-- ===== Section Label ===== -->
<div class="section-label">
    <div class="section-label-dot"></div>
    <span class="section-label-text">ملخص التجربة</span>
    <div class="section-label-line"></div>
</div>

<!-- ===== Main Card ===== -->
<div class="card mv2-card mb-3">
    <!-- Gradient Header -->
    <div class="mv2-header-bar" style="background: linear-gradient(100deg, #05AABB 0%, #7dd3e0 55%, #f0fbfc 100%);">
        <div class="mv2-org-identity">
            <div class="mv2-org-logo d-flex align-items-center justify-content-center" style="border: 3px solid #05AABB; background:#e9f7f9;">
                <i class="ri-building-4-fill fs-2 text-info"></i>
            </div>
            <h6 class="mv2-org-title"> تجربـــــة عبيــــر لحــــــج 1447 هـ</h6>
        </div>
    </div>

    <div class="card-body" style="padding-top: 50px;">
        <div class="row g-3 mt-2 mt-lg-0">

            <!-- Filters -->
            <div class="col-lg-8">
                <div class="mv2-filters">
                    <div class="row g-3">
                        <div class="col">
                            <label>التاريخ</label>
                            <input type="date" class="form-control" value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="col">
                            <label>المنظمة</label>
                            <select class="form-select">
                                <option selected>شركة عبيــــــر الماسيـــة</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>الحالة</label>
                            <select class="form-select">
                                <option value="">منجزة</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-lg-4 d-flex justify-content-center align-items-center">
                <div>
                    <div style="font-size:0.78rem;font-weight:700;color:#475569;text-align:center;margin-bottom:8px;direction:rtl;">تقييم التجربة</div>
                    <div class="d-flex align-items-center gap-4">
                        <div id="meal_pie_static" style="min-width:180px;min-height:180px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== Stat Cards + View Toggle ===== -->
<div class="d-flex flex-column flex-md-row align-items-center gap-3 mb-3">

    <div id="mv2-stat-cards" class="mv2-stat-cards flex-grow-1 w-100 align-items-stretch">
        <!-- Active -->
        <div class="mv2-stat-card" style="background:#f0faf4;border-color:#d4edda;">
            <div class="stat-icon" style="background:#d4edda;color:#2e7d32;"><i class="ri-time-line"></i></div>
            <div>
                <div class="stat-num" style="color:#2e7d32;">350 +</div>
                <div class="stat-txt">عدد الساعات </div>
            </div>
        </div>
        <!-- Late -->
        <div class="mv2-stat-card" style="background:#fffbf0;border-color:#fff3cd;">
            <div class="stat-icon" style="background:#fff3cd;color:#f9a825;"><i class="ri-restaurant-line"></i></div>
            <div>
                <div class="stat-num" style="color:#f9a825;">800,000 +</div>
                <div class="stat-txt">عدد الوجبات الي راقبت عليها</div>
            </div>
        </div>
        <!-- Tickets -->
        <div class="mv2-stat-card" style="background:#fef5f5;border-color:#f8d7da;">
            <div class="stat-icon" style="background:#f8d7da;color:#e53935;"><i class="ri-alarm-warning-line"></i></div>
            <div>
                <div class="stat-num" style="color:#e53935;">80 +</div>
                <div class="stat-txt">عدد البلاغات الي كانت في شفتي</div>
            </div>
        </div>
        <!-- Supports -->
        <div class="mv2-stat-card" style="background:#f0f7ff;border-color:#d6eaf8;">
            <div class="stat-icon" style="background:#d6eaf8;color:#1e88e5;"><i class="ri-truck-line"></i></div>
            <div>
                <div class="stat-num" style="color:#1e88e5;">2 +</div>
                <div class="stat-txt">عدد الاسنادات الي صارت في شفتي</div>
            </div>
        </div>
    </div>
</div>

<!-- ===== Meal List (Horizontal View) ===== -->
<div id="horizontal-view">

    <!-- ======= Nationality Group: سعودي ======= -->
    <div class="mv2-nat-group">
        <div class="mv2-nat-header" onclick="this.classList.toggle('collapsed');this.nextElementSibling.classList.toggle('collapsed');">
            <span class="nat-flag">🇸🇦</span>
            <span class="nat-name">التجربـــــة</span>
            <div class="nat-stats">
                <span class="ns-item"><span class="ns-dot" style="background:#28a745;"></span> 1 منجزة</span>
            </div>
            <i class="ri-arrow-down-s-line nat-arrow"></i>
        </div>
        <div class="mv2-nat-body">

            <!-- Meal Card 1 - Done -->
            <div class="mv2-meal-card">
                <div class="mv2-meal-info-bar" style="background: linear-gradient(to left, #ffffff 0%, #05AABB44 100%);">
                    <span class="info-item"><i class="ri-map-pin-2-fill"></i> مبنى ركايا - مكة المكرمة</span>
                    <span class="info-item"><i class="ri-group-fill"></i> 134,375</span>
                    <span class="info-item"><i class="ri-building-fill"></i> شركة عبيــــر الماسيــــة</span>
                    <div class="mv2-progress-wrap">
                        <div class="mv2-progress-bar">
                            <div class="bar-fill" style="width:100%;background:#28a745;"></div>
                        </div>
                        <span class="mv2-progress-pct" style="color:#28a745;">100%</span>
                    </div>
                    <div class="info-actions"></div>
                    <button type="button" class="info-btn info-btn-end"><i class="ri-information-line"></i></button>
                </div>
                <div class="px-4 overflow-auto card-body">
                    <div class="overflow-auto" style="min-width: 900px;">
                        <div class="d-flex align-items-start justify-content-between fw-medium py-4 meal-steps w-100">
                            <!-- Start flag -->
                            <div class="d-flex flex-column gap-3 justify-content-center text-center" style="flex:1 1 0%;">
                                <div class="fs-2xs" style="visibility:hidden;">&nbsp;</div>
                                <div class="d-flex justify-content-center">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"><path d="M1.5 1V11C1.5 11 16.25 11.0008 16.25 10.7505C16.25 10.5645 13.4918 8.03425 12.0726 6.74459C11.6331 6.34522 11.6331 5.65483 12.0726 5.2555C13.4919 3.96612 16.25 1.4365 16.25 1.25049C16.25 1.00023 1.5 1 1.5 1Z" fill="#00C569" stroke="#00C569"/><path d="M2.25 1.24805V0.498047H0.75V1.24805H2.25ZM0.75 18.9997C0.75 19.4139 1.08579 19.7497 1.5 19.7497C1.91421 19.7497 2.25 19.4139 2.25 18.9997H0.75ZM1.5 1.24805H0.75V18.9997H1.5H2.25V1.24805H1.5Z" fill="#C4C4C4"/></svg>
                                </div>
                                <div>
                                    <div class="fw-normal">بداية موسم 47</div>
                                    <div class="text-success fw-bold">15 ذو القعدة</div>
                                </div>
                            </div>
                            <!-- Stage 1 - done on-time -->
                            <div class="d-flex flex-column gap-3 justify-content-center text-center step-status done on-time" style="flex:1 1 0%;">
                                <div class="time fs-2xs">12:00 ص</div>
                                <div class="step-container step-line d-flex justify-content-center w-100">
                                    <div class="circle rounded-circle border border-3 d-flex align-items-center justify-content-center" style="width:28px;height:28px;z-index:3;">
                                        <span class="mdi mdi-check fs-5"></span>
                                    </div>
                                </div>
                                <div class="step px-2">بداية الموسم </div>
                            </div>
                            <!-- Stage 2 - done on-time -->
                            <div class="d-flex flex-column gap-3 justify-content-center text-center step-status done on-time" style="flex:1 1 0%;">
                                <div class="time fs-2xs">11:45 ص</div>
                                <div class="step-container step-line d-flex justify-content-center w-100">
                                    <div class="circle rounded-circle border border-3 d-flex align-items-center justify-content-center" style="width:28px;height:28px;z-index:3;">
                                        <span class="mdi mdi-check fs-5"></span>
                                    </div>
                                </div>
                                <div class="step px-2"> الموسم</div>
                            </div>
                            <!-- Stage 3 - done on-time -->
                            <div class="d-flex flex-column gap-3 justify-content-center text-center step-status done on-time" style="flex:1 1 0%;">
                                <div class="time fs-2xs">06:10 ص</div>
                                <div class="step-container step-line d-flex justify-content-center w-100">
                                    <div class="circle rounded-circle border border-3 d-flex align-items-center justify-content-center" style="width:28px;height:28px;z-index:3;">
                                        <span class="mdi mdi-check fs-5"></span>
                                    </div>
                                </div>
                                <div class="step px-2">نهاية الموسم</div>
                            </div>
                            <!-- End flag -->
                            <div class="d-flex flex-column gap-3 justify-content-center text-center" style="flex:1 1 0%;">
                                <div class="fs-2xs" style="visibility:hidden;">&nbsp;</div>
                                <div class="d-flex justify-content-center">
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none"><path d="M1.5 1V11C1.5 11 16.25 11.0008 16.25 10.7505C16.25 10.5645 13.4918 8.03425 12.0726 6.74459C11.6331 6.34522 11.6331 5.65483 12.0726 5.2555C13.4919 3.96612 16.25 1.4365 16.25 1.25049C16.25 1.00023 1.5 1 1.5 1Z" fill="#00C569" stroke="#00C569"/><path d="M2.25 1.24805V0.498047H0.75V1.24805H2.25ZM0.75 18.9997C0.75 19.4139 1.08579 19.7497 1.5 19.7497C1.91421 19.7497 2.25 19.4139 2.25 18.9997H0.75ZM1.5 1.24805H0.75V18.9997H1.5H2.25V1.24805H1.5Z" fill="#C4C4C4"/></svg>
                                </div>
                                <div>
                                    <div class="fw-normal">نهاية موسم 47</div>
                                    <div class="text-success fw-bold">15 ذو الحجة</div>
                                </div>
                            </div>
                        </div>
                        <div class="meal_answers" data-meal-idx="0-0"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>

<!-- Video Popup -->
<div id="video-popup" onclick="closeVideoPopup()" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.85);z-index:9999;align-items:center;justify-content:center;">
    <video id="video-popup-player" controls style="max-width:90vw;max-height:85vh;border-radius:12px;box-shadow:0 8px 40px rgba(0,0,0,0.6);" onclick="event.stopPropagation()"></video>
    <button onclick="closeVideoPopup()" style="position:absolute;top:20px;left:20px;background:rgba(255,255,255,0.15);border:none;color:#fff;width:36px;height:36px;border-radius:50%;font-size:1.2rem;cursor:pointer;display:flex;align-items:center;justify-content:center;">✕</button>
</div>
<script>
    function openVideoPopup(src) {
        var popup = document.getElementById('video-popup');
        var player = document.getElementById('video-popup-player');
        player.src = src;
        popup.style.display = 'flex';
        player.play();
    }
    function closeVideoPopup() {
        var popup = document.getElementById('video-popup');
        var player = document.getElementById('video-popup-player');
        player.pause();
        player.src = '';
        popup.style.display = 'none';
    }
    document.addEventListener('keydown', function(e) { if (e.key === 'Escape') closeVideoPopup(); });
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.54.0/dist/apexcharts.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // ===== Pie Chart =====
        var pieOptions = {
            series: [86.65, 13.35],
            chart: { width: 200, type: 'donut' },
            colors: ['#05AABB', '#D3D3D3'],
            labels: ['راضون', 'غير راضون'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '72%',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: '11px',
                                fontFamily: 'IBM Plex Sans Arabic',
                                fontWeight: 600,
                                color: '#94a3b8',
                                offsetY: -6,
                            },
                            value: {
                                show: true,
                                fontSize: '24px',
                                fontFamily: 'IBM Plex Sans Arabic',
                                fontWeight: 700,
                                color: '#05AABB',
                                offsetY: 4,
                                formatter: function (val) { return Math.round(val) + '%'; }
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: 'كم نسبة رضاي عن الموسم؟',
                                fontSize: '10px',
                                fontFamily: 'IBM Plex Sans Arabic',
                                fontWeight: 600,
                                color: '#94a3b8',
                                formatter: function (w) {
                                    return Math.round(w.globals.series[0]) + '%';
                                }
                            }
                        }
                    }
                }
            },
            dataLabels: { enabled: false },
            legend: { show: false },
            stroke: { width: 2, colors: ['#fff'] },
        };
        var pieChart = new ApexCharts(document.querySelector('#meal_pie_static'), pieOptions);
        pieChart.render();

        // ===== Stage Answers =====
        var currentOpenIdx = null;

        document.addEventListener('click', function(e) {
            var circle = e.target.closest('.circle');
            if (!circle && !e.target.closest('.meal_answers')) {
                document.querySelectorAll('.meal_answers.show').forEach(function(el) { el.classList.remove('show'); });
                currentOpenIdx = null;
                return;
            }
            if (!circle) return;

            var stepEl = circle.closest('.step-status');
            var mealAnswersEl = circle.closest('.overflow-auto').querySelector('.meal_answers');
            if (!mealAnswersEl) return;

            var mealIdx = mealAnswersEl.dataset.mealIdx;
            var stageName = stepEl ? stepEl.querySelector('.step')?.textContent?.trim() : '';
            var stageTime = stepEl ? stepEl.querySelector('.time')?.textContent?.trim() : '';
            var uniqueKey = mealIdx + stageName;

            if (currentOpenIdx === uniqueKey) {
                mealAnswersEl.classList.remove('show');
                currentOpenIdx = null;
                return;
            }
            document.querySelectorAll('.meal_answers.show').forEach(function(el) { el.classList.remove('show'); });

            var stageQuestions = {
                'بداية الموسم': [
                    { q: 'هل تم استلام المعلومات التشغيلية؟', a: 'لا' },
                    { q: 'هل الفريق مكتمل وجاهز؟', a: 'نعم' },
                    { q: 'هل تم مراجعة جداول الوجبات؟', a: 'لا' },
                    { q: 'الملاحظات', a: 'عندي مشكلة في عدم جاهزية جميع المعلومات التشغيلية ولخبطة فريق التشغيل ' },
                    { q: 'المرفقات', type: 'video', src: '/Videos/0619(2).mov' },

                ],
                'الموسم': [
                    { q: 'هل سير العمليات منتظم؟', a: 'برضو لا' },
                    { q: 'هل تم الالتزام بالمواعيد؟', a: 'لا' },
                    { q: 'هل كان هناك أي بلاغات؟', a: 'نععععم' },
                    { q: 'هل كان هناك أي إسنادات؟', a: 'نععععم' },
                    { q: 'الملاحظات', a: 'فريق العمليات ماهو مهيأ انه يمسك غرفة عمليات ..  ' },
                    { q: 'المرفقات', type: 'video', src: '/Videos/0620(1).mov' },


                ],
                'نهاية الموسم': [
                    { q: 'هل تم تسليم جميع التقارير؟', a: 'نعم' },
                    { q: 'هل تمت تسوية جميع البلاغات؟', a: 'نعم' },
                    { q: 'هل تم جرد المعدات؟', a: 'نعم' },
                    { q: 'ملاحظات ختامية', a: 'لا يوجد' },
                    { q: 'المرفقات', type: 'video', src: '/Videos/0620 (1)(1).mov' },

                ],
            };

            var questions = stageQuestions[stageName] || [];
            var html = '<div class="ans-title">' + (stageName || 'المرحلة') + '</div>';
            if (stageTime) html += '<div class="ans-row"><span class="ans-label">الوقت</span><span class="ans-value">' + stageTime + '</span></div>';
            if (questions.length > 0) {
                questions.forEach(function(item) {
                    if (item.type === 'video') {
                        html += '<div class="ans-row"><span class="ans-label">' + item.q + '</span><div onclick="openVideoPopup(\'' + item.src + '\')" style="position:relative;width:160px;height:100px;border-radius:10px;overflow:hidden;cursor:pointer;border:2px solid #e2e8f0;flex-shrink:0;"><video src="' + item.src + '" style="width:100%;height:100%;object-fit:cover;" muted></video><div style="position:absolute;inset:0;background:rgba(0,0,0,0.35);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;"><div style="width:38px;height:38px;background:rgba(255,255,255,0.9);border-radius:50%;display:flex;align-items:center;justify-content:center;"><svg width="14" height="16" viewBox="0 0 14 16" fill="none"><path d="M1 1L13 8L1 15V1Z" fill="#033A40"/></svg></div><span style="color:#fff;font-size:0.68rem;font-weight:600;letter-spacing:0.03em;">فيديو</span></div></div></div>';
                    } else {
                        var valClass = item.a === 'نعم' ? 'ans-value ans-val-yes' : (item.a === 'لا' ? 'ans-value ans-val-no' : 'ans-value');
                        html += '<div class="ans-row"><span class="ans-label">' + item.q + '</span><span class="' + valClass + '">' + item.a + '</span></div>';
                    }
                });
            } else {
                html += '<div class="ans-row"><span class="ans-label" style="color:#aaa;">لا توجد أسئلة</span></div>';
            }

            mealAnswersEl.innerHTML = html;
            requestAnimationFrame(function() { mealAnswersEl.classList.add('show'); });
            currentOpenIdx = uniqueKey;
        });

        // ===== Tab switching =====
        document.querySelectorAll('.mv2-tabs .nav-link').forEach(function(link) {
            link.addEventListener('click', function() {
                document.querySelectorAll('.mv2-tabs .nav-link').forEach(function(l) { l.classList.remove('active'); });
                this.classList.add('active');
            });
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const F = 'IBM Plex Sans Arabic';
    const P = '#033A40', S = '#2dcb73', D = '#EE6363', I = '#4ab0c1', W = '#f6b749', G = '#CAB272';
    const isRTL = document.documentElement.dir === 'rtl';
    const gridColor = '#f0f0f0';

    new ApexCharts(document.getElementById('line-chart-trend'), {
        chart: { type: 'area', height: 280, fontFamily: F, toolbar: { show: false }, zoom: { enabled: false } },
        series: [
            { name: 'الطلبات',  data: [18, 22, 19, 25, 30, 28, 142] },
            { name: 'الوجبات',  data: [40, 45, 50, 55, 58, 60, 60] },
            { name: 'البلاغات', data: [5, 8, 6, 9, 7, 10, 38] },
            { name: 'الإسناد',  data: [3, 5, 4, 7, 6, 8, 24] },
        ],
        xaxis: { categories: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'], labels: { style: { fontFamily: F, fontSize: '10px' } }, axisBorder: { show: false }, axisTicks: { show: false } },
        yaxis: { labels: { style: { fontFamily: F, fontSize: '10px' }, formatter: v => v.toLocaleString('en') }, opposite: isRTL },
        colors: [P, S, D, I],
        stroke: { curve: 'smooth', width: 2.5 },
        fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: .3, opacityTo: .02, stops: [0, 90, 100] } },
        dataLabels: { enabled: false },
        legend: { position: 'top', fontFamily: F, fontSize: '11px', markers: { size: 5 }, horizontalAlign: 'right', itemMargin: { horizontal: 10 } },
        grid: { borderColor: gridColor, strokeDashArray: 3 },
        tooltip: { style: { fontFamily: F } }
    }).render();

    const donutOpts = (el, series, labels, colors) => new ApexCharts(document.getElementById(el), {
        chart: { type: 'donut', height: el.includes('trend') ? 280 : 240, fontFamily: F, toolbar: { show: false } },
        series, labels, colors,
        stroke: { width: 2, colors: ['#fff'] },
        plotOptions: { pie: { donut: { size: '72%', labels: { show: true,
            value: { fontFamily: F, fontSize: '16px', fontWeight: 700, color: P, formatter: v => Number(v).toLocaleString('en') },
            total: { show: true, label: 'المجموع', fontFamily: F, fontSize: '10px', color: '#999', formatter: w => w.globals.seriesTotals.reduce((a,b) => a+b, 0).toLocaleString('en') }
        }}}},
        legend: { position: 'bottom', fontFamily: F, fontSize: '11px', horizontalAlign: 'center', itemMargin: { horizontal: 8 } },
        dataLabels: { enabled: false },
        tooltip: { style: { fontFamily: F } }
    }).render();

    donutOpts('donut-orders_by_status', [85, 32, 15, 10], ['مقبول', 'قيد المراجعة', 'مرفوض', 'معلق'], [S, I, D, W]);
    donutOpts('donut-tickets_by_danger', [12, 16, 10], ['عالية', 'متوسطة', 'منخفضة'], [D, W, S]);
    donutOpts('donut-supports_by_status', [8, 10, 6], ['مكتمل', 'جاري', 'معلق'], [S, I, W]);

    new ApexCharts(document.getElementById('bar-meals_by_period'), {
        chart: { type: 'bar', height: 240, fontFamily: F, toolbar: { show: false } },
        series: [{ name: 'وجبات', data: [24, 18, 18] }],
        xaxis: { categories: ['الإفطار', 'الغداء', 'العشاء'], labels: { style: { fontFamily: F, fontSize: '11px' } } },
        yaxis: { labels: { style: { fontFamily: F, fontSize: '10px' } }, opposite: isRTL },
        colors: [W, I, P],
        plotOptions: { bar: { borderRadius: 5, columnWidth: '50%', distributed: true } },
        legend: { show: false },
        dataLabels: { enabled: true, style: { fontFamily: F, fontSize: '11px', fontWeight: 600 } },
        grid: { borderColor: gridColor, strokeDashArray: 3 },
        tooltip: { style: { fontFamily: F }, y: { formatter: v => v + ' وجبة' } }
    }).render();

    new ApexCharts(document.getElementById('bar-orders_by_org'), {
        chart: { type: 'bar', height: 260, stacked: true, fontFamily: F, toolbar: { show: false } },
        series: [
            { name: 'مقبول',        data: [45, 28, 12] },
            { name: 'قيد المراجعة', data: [20, 10, 2] },
            { name: 'مرفوض',        data: [5, 6, 4] },
        ],
        xaxis: { categories: ['شركة الضيافة الذهبية', 'مؤسسة النجوم', 'مجموعة الأمانة'], labels: { style: { fontFamily: F, fontSize: '10px' } } },
        yaxis: { labels: { style: { fontFamily: F, fontSize: '10px' } }, opposite: isRTL },
        colors: [S, I, D],
        plotOptions: { bar: { borderRadius: 3, columnWidth: '45%' } },
        legend: { position: 'top', fontFamily: F, fontSize: '11px', markers: { size: 5 }, horizontalAlign: 'right', itemMargin: { horizontal: 10 } },
        dataLabels: { enabled: false },
        grid: { borderColor: gridColor, strokeDashArray: 3 },
        tooltip: { style: { fontFamily: F } }
    }).render();

    document.querySelectorAll('.org-tabs .nav-link').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.org-tabs .nav-link').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
</script>
</body>
</html>
