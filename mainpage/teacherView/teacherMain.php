<!DOCTYPE html>
<html lang="en">


<body>
    <svg id="dashboardIcon" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M24 17C24 16.4477 24.4477 16 25 16H31C31.5523 16 32 16.4477 32 17V24C32 24.5523 31.5523 25 31 25H25C24.4477 25 24 24.5523 24 24V17Z" stroke="#D9D9D9" stroke-linecap="round"/>
    <path d="M15 9.0625C15 8.4757 15.5373 8 16.2 8H19.8C20.4627 8 21 8.4757 21 9.0625V23.9375C21 24.5243 20.4627 25 19.8 25H16.2C15.5373 25 15 24.5243 15 23.9375V9.0625Z" stroke="#D9D9D9" stroke-linecap="round"/>
    <path d="M24 9.25C24 8.55965 24.4477 8 25 8H31C31.5523 8 32 8.55965 32 9.25V11.75C32 12.4404 31.5523 13 31 13H25C24.4477 13 24 12.4404 24 11.75V9.25Z" stroke="#D9D9D9" stroke-linecap="round"/>
    </svg>

    <svg id="timetableIcon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.82857 18C2.07864 17.9992 1.35965 17.7009 0.829372 17.1706C0.299088 16.6403 0.000816773 15.9214 0 15.1714V4.88571C0.000835603 4.18025 0.264882 3.50048 0.740472 2.97942C1.21606 2.45836 1.86897 2.13352 2.57143 2.06846V0.771429C2.57143 0.566833 2.6527 0.370617 2.79737 0.225946C2.94205 0.0812753 3.13826 0 3.34286 0C3.54745 0 3.74367 0.0812753 3.88834 0.225946C4.03301 0.370617 4.11429 0.566833 4.11429 0.771429V2.05714H13.8857V0.771429C13.8857 0.566833 13.967 0.370617 14.1117 0.225946C14.2563 0.0812753 14.4525 0 14.6571 0C14.8617 0 15.058 0.0812753 15.2026 0.225946C15.3473 0.370617 15.4286 0.566833 15.4286 0.771429V2.06846C16.131 2.13352 16.7839 2.45836 17.2595 2.97942C17.7351 3.50048 17.9992 4.18025 18 4.88571V15.1714C17.9995 15.9214 17.7013 16.6406 17.1709 17.1709C16.6406 17.7013 15.9214 17.9995 15.1714 18H2.82857ZM1.54286 15.1714C1.54313 15.5123 1.67868 15.8392 1.91974 16.0803C2.16079 16.3213 2.48766 16.4569 2.82857 16.4571H15.1714C15.5123 16.4569 15.8392 16.3213 16.0803 16.0803C16.3213 15.8392 16.4569 15.5123 16.4571 15.1714V8.22857H1.54286V15.1714ZM16.4571 6.68571V4.88571C16.4569 4.54481 16.3213 4.21794 16.0803 3.97688C15.8392 3.73582 15.5123 3.60027 15.1714 3.6H2.82857C2.48766 3.60027 2.16079 3.73582 1.91974 3.97688C1.67868 4.21794 1.54313 4.54481 1.54286 4.88571V6.68571H16.4571Z" fill="#D9D9D9"/>
    </svg>

    

</body>

<style>
/* VIEW */

.view {
position: relative;
width: 1536px;
height: 730px;

background: #01172A;
mix-blend-mode: normal;
}


/* MENU */
.menu {

position: absolute;
width: 212px;
height: 700px;

background: #010F17;
border-radius: 25px;
}

/* MENU */
.menuPage {
position: absolute;
width: 1260px;
height: 141px;

background: #010F17;
border-radius: 25px;
}

/* HIGHLIGHT BAR */
.selectionHighlightBar{
position: absolute;
width: 4px;
height: 33px;

background: #D9D9D9;
mix-blend-mode: normal;
}

/* HIGHLIGHT COVER */
.selectionHighlightCover {
position: absolute;
width: 181px;
height: 33px;

background: rgba(255, 255, 255, 0.1);
transform: matrix(1, 0, 0, -1, 0, 0);
}

/* view-box */
.viewBox {
position: absolute;
left: 0%;
right: 0%;
top: 0%;
bottom: 0%;
}

/* Dashboard */
.dashboard {
position: absolute;
width: 114px;
height: 22px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
letter-spacing: -0.01em;

color: #A09D9A;
}


/* Timetable */
.timetable {
position: absolute;
width: 114px;
height: 22px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
letter-spacing: -0.01em;

color: #A09D9A;
}


/* Report */
.report {
position: absolute;
width: 114px;
height: 22px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
letter-spacing: -0.01em;

color: #A09D9A;
}


/* Behaviour */
.behaviour {
position: absolute;
width: 114px;
height: 22px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
letter-spacing: -0.01em;

color: #A09D9A;
}


/* Sign out */
.signOut {
position: absolute;
width: 114px;
height: 22px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
letter-spacing: -0.01em;

color: #A09D9A;
}


/* Settings */
.settings {
position: absolute;
width: 114px;
height: 22px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 13px;
line-height: 16px;
letter-spacing: -0.01em;

color: #A09D9A;
}


</style>