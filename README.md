
details {
    display: block;
}
a {
    background-color: transparent;
    color: #1d7b18;
}
a:active, a:hover {
    outline: 0;
}
img {
    border: 0;
    width: auto;
    height: 100%;
    max-width: 100%}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
td {
    padding: 0;
}
body:after {
    content: url(/assets/img/close.webp) url(/assets/img/loading.gif) url(/assets/img/prev.webp) url(/assets/img/next.webp);
    display: none;
}
.btn {
    display: block;
    padding: 10px;
    margin: 0 auto;
    font: 600 18px/20px 'open sans', sans-serif;
    color: #fff;
    text-align: center;
    text-decoration: none;
    transition: .2s linear;
    border-radius: 2px;
    background: #1d7b18;
}
.btn:hover {
    background: #2eb127;
}
.btn[type=submit] {
    background-color: #1d7b18;
}
a[href^="/to/"] {
    position: relative;
}
a[href^="/to/"]:before {
    background: #f4f9f3;
    background-image: none!;
    border: 1px solid #1d7b18;
    font-family: 'Open Sans', sans-serif;
    font-size: 11px;
    line-height: 1.5;
    font-weight: 400;
    color: #5d5d5d;
    white-space: normal;
    position: absolute;
    top: 100%;
    right: 0;
    min-width: 300px;
    max-width: 300px;
    margin: 10px 0 0;
    padding: 5px;
    text-align: left;
    visibility: hidden;
    opacity: 0;
    transform: translateY(-10px);
    transition: transform .25s, opacity .25s, visibility 0s .25s;
    pointer-events: none;
}
a[href^="/to/"]:hover {
    z-index: 3;
}
a[href^="/to/"]:hover:before {
    visibility: visible;
    opacity: 1;
    transform: none;
    transition: opacity .25s, transform .25s;
}
.brand-details a[href^="/to/"]:before {
    content: none;
}
[data-tooltip] {
    position: relative;
    cursor: pointer;
}
[data-tooltip]:after, [data-tooltip]:before {
    position: absolute;
    visibility: hidden;
    -ms-filter: "alpha(Opacity=0)";
    opacity: 0;
    -webkit-transition: opacity .2s ease-in-out, visibility .2s ease-in-out, -webkit-transform .2s cubic-bezier(.71, 1.7, .77, 1.24);
    -moz-transition: opacity .2s ease-in-out, visibility .2s ease-in-out, -moz-transform .2s cubic-bezier(.71, 1.7, .77, 1.24);
    transition: opacity .2s ease-in-out, visibility .2s ease-in-out, transform .2s cubic-bezier(.71, 1.7, .77, 1.24);
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    pointer-events: none;
}
[data-tooltip]:focus:after, [data-tooltip]:focus:before, [data-tooltip]:hover:after, [data-tooltip]:hover:before {
    visibility: visible;
    -ms-filter: "alpha(Opacity=100)";
    opacity: 1;
}
[data-tooltip]:before {
    z-index: 1001;
    border: 6px solid transparent;
    background: 0 0;
    content: ""}
[data-tooltip]:after {
    z-index: 1000;
    padding: 8px;
    width: 350px;
    background-color: #000;
    background-color: hsla(0, 0%, 20%, .9);
    color: #fff;
    content: attr(data-tooltip);
    font-size: 14px;
    line-height: 1.2;
}
[data-tooltip]:after, [data-tooltip]:before {
    bottom: 100%;
    left: 50%}
[data-tooltip]:before {
    margin-left: -6px;
    margin-bottom: -12px;
    border-top-color: #000;
    border-top-color: hsla(0, 0%, 20%, .9);
}
[data-tooltip]:after {
    margin-left: -80px;
}
[data-tooltip]:focus:after, [data-tooltip]:focus:before, [data-tooltip]:hover:after, [data-tooltip]:hover:before {
    -webkit-transform: translateY(-12px);
    -moz-transform: translateY(-12px);
    transform: translateY(-12px);
}
@media only screen and (min-width:480px) {
    a[href^="/to/"]: before {
    min-width: 340px;
    max-width: 460px;
}
}@media only screen and (min-width:600px) {
    a[href^="/to/"]: before {
    min-width: 420px;
    max-width: 560px;
}
}@media only screen and (min-width:768px) {
    a[href^="/to/"]: before {
    min-width: 480px;
    max-width: 680px;
}
}@media (max-width:767px) {
    body: not(.scrolled) .brand-details:not(:nth-child(-n+8)) {
    content-visibility: auto;
}
}.brand-details {
    margin: 1% auto 16px;
    border: 2px solid #b1b1b1;
}
.brand-details table {
    position: relative;
    width: 100%;
    padding: 70px 0 115px;
    border-collapse: separate;
    font: normal 12px/14px 'open sans', sans-serif;
    color: #6b6b6b;
    empty-cells: hide;
}
.brand-details td {
    padding: 5px;
}
.brand-details td.none {
    display: none!;
}
.brand-details .brand, .brand-details .ext, .brand-details .rate, .brand-details .reg {
    display: block;
    position: absolute;
    top: 0;
}
.brand-details .brand td, .brand-details .ext td {
    display: block;
}
.brand-details .brand {
    left: 0;
    width: 45%}
.brand-details .brand td span {
    display: block;
    height: 50px;
    text-indent: -9999px;
}
.brand-details .brand .img {
    text-align: center;
    line-height: 50px;
}
.brand-details .brand .img span {
    display: inline-block;
    width: 0;
    vertical-align: middle;
    height: 0;
    font-size: 0;
    color: transparent;
}
.brand-details .brand .img span:not([class]) {
    display: none;
}
.brand-details .brand .img img {
    vertical-align: middle;
    width: auto;
    height: auto;
    max-width: 100%}
.brand-details .rate {
    right: 0;
    width: 55%;
    margin: 17px 0;
}
.brand-details .rate td, .brand-details .reg td {
    display: block;
    padding-left: 1%;
    padding-right: 1%;
    overflow: hidden;
}
.brand-details .rate td:first-child, .brand-details .reg td:first-child {
    float: left;
    width: 48%}
.brand-details .rate {
    font: 600 13px/16px 'open sans', sans-serif;
    color: #908b8b;
}
.brand-details .rate td:first-child {
    font-weight: 300;
    width: 30%}
.brand-details .rate td:first-child span {
    display: none;
}
.brand-details .rate td span {
    color: #4081d8;
}
.brand-details .rate td i, .brand-details .rate td i span {
    display: block;
    width: 100px;
    height: 16px;
    background: url(/assets/img/sterne.webp) repeat-x 0 bottom;
}
.brand-details .rate td i i, .brand-details .rate td i span {
    background-position: 0 0;
    text-indent: -9999px;
}
.brand-details .rate td i.wert10 i, .brand-details .rate td i.wert10 span {
    width: 22px;
}
.brand-details .rate td i.wert11 i, .brand-details .rate td i.wert11 span {
    width: 23.6px;
}
.brand-details .rate td i.wert12 i, .brand-details .rate td i.wert12 span {
    width: 25.2px;
}
.brand-details .rate td i.wert13 i, .brand-details .rate td i.wert13 span {
    width: 26.8px;
}
.brand-details .rate td i.wert14 i, .brand-details .rate td i.wert14 span {
    width: 28.4px;
}
.brand-details .rate td i.wert15 i, .brand-details .rate td i.wert15 span {
    width: 30px;
}
.brand-details .rate td i.wert16 i, .brand-details .rate td i.wert16 span {
    width: 31.6px;
}
.brand-details .rate td i.wert17 i, .brand-details .rate td i.wert17 span {
    width: 33.2px;
}
.brand-details .rate td i.wert18 i, .brand-details .rate td i.wert18 span {
    width: 34.8px;
}
.brand-details .rate td i.wert19 i, .brand-details .rate td i.wert19 span {
    width: 36.4px;
}
.brand-details .rate td i.wert20 i, .brand-details .rate td i.wert20 span {
    width: 40px;
}
.brand-details .rate td i.wert20 i, .brand-details .rate td i.wert20 span {
    width: 42px;
}
.brand-details .rate td i.wert21 i, .brand-details .rate td i.wert21 span {
    width: 43.6px;
}
.brand-details .rate td i.wert22 i, .brand-details .rate td i.wert22 span {
    width: 45.2px;
}
.brand-details .rate td i.wert23 i, .brand-details .rate td i.wert23 span {
    width: 46.8px;
}
.brand-details .rate td i.wert24 i, .brand-details .rate td i.wert24 span {
    width: 48.4px;
}
.brand-details .rate td i.wert25 i, .brand-details .rate td i.wert25 span {
    width: 50px;
}
.brand-details .rate td i.wert26 i, .brand-details .rate td i.wert26 span {
    width: 51.6px;
}
.brand-details .rate td i.wert27 i, .brand-details .rate td i.wert27 span {
    width: 53.2px;
}
.brand-details .rate td i.wert28 i, .brand-details .rate td i.wert28 span {
    width: 54.8px;
}
.brand-details .rate td i.wert29 i, .brand-details .rate td i.wert29 span {
    width: 56.4px;
}
.brand-details .rate td i.wert30 i, .brand-details .rate td i.wert30 span {
    width: 60px;
}
.brand-details .rate td i.wert30 i, .brand-details .rate td i.wert30 span {
    width: 62px;
}
.brand-details .rate td i.wert31 i, .brand-details .rate td i.wert31 span {
    width: 63.6px;
}
.brand-details .rate td i.wert32 i, .brand-details .rate td i.wert32 span {
    width: 65.2px;
}
.brand-details .rate td i.wert33 i, .brand-details .rate td i.wert33 span {
    width: 66.8px;
}
.brand-details .rate td i.wert34 i, .brand-details .rate td i.wert34 span {
    width: 68.4px;
}
.brand-details .rate td i.wert35 i, .brand-details .rate td i.wert35 span {
    width: 70px;
}
.brand-details .rate td i.wert36 i, .brand-details .rate td i.wert36 span {
    width: 71.6px;
}
.brand-details .rate td i.wert37 i, .brand-details .rate td i.wert37 span {
    width: 73.2px;
}
.brand-details .rate td i.wert38 i, .brand-details .rate td i.wert38 span {
    width: 74.8px;
}
.brand-details .rate td i.wert39 i, .brand-details .rate td i.wert39 span {
    width: 76.4px;
}
.brand-details .rate td i.wert40 i, .brand-details .rate td i.wert40 span {
    width: 80px;
}
.brand-details .rate td i.wert4 i, .brand-details .rate td i.wert4 span {
    width: 80px;
}
.brand-details .rate td i.wert40 i, .brand-details .rate td i.wert40 span {
    width: 82px;
}
.brand-details .rate td i.wert41 i, .brand-details .rate td i.wert41 span {
    width: 83.6px;
}
.brand-details .rate td i.wert42 i, .brand-details .rate td i.wert42 span {
    width: 85.2px;
}
.brand-details .rate td i.wert43 i, .brand-details .rate td i.wert43 span {
    width: 86.8px;
}
.brand-details .rate td i.wert44 i, .brand-details .rate td i.wert44 span {
    width: 88.4px;
}
.brand-details .rate td i.wert45 i, .brand-details .rate td i.wert45 span {
    width: 90px;
}
.brand-details .rate td i.wert46 i, .brand-details .rate td i.wert46 span {
    width: 91.6px;
}
.brand-details .rate td i.wert47 i, .brand-details .rate td i.wert47 span {
    width: 93.2px;
}
.brand-details .rate td i.wert48 i, .brand-details .rate td i.wert48 span {
    width: 94.8px;
}
.brand-details .rate td i.wert49 i, .brand-details .rate td i.wert49 span {
    width: 96.4px;
}
.brand-details .rate td i.wert50 i, .brand-details .rate td i.wert50 span {
    width: 100px;
}
.brand-details .rate td:first-child, .brand-details .reg td:first-child {
    text-align: right;
    white-space: nowrap;
}
.brand-details .arg td:first-child {
    font-weight: 700;
    text-align: right;
}
.brand-details .arg td:first-child:after, .brand-details .rate td:first-child:after, .brand-details .reg td:first-child:after {
    content: ":"}
.brand-details .reg {
    bottom: 50px;
    left: 0;
    right: 0;
    top: auto;
}
.brand-details .reg td {
    height: 54px;
    line-height: 54px;
}
.brand-details .reg .logo span {
    display: inline-block;
    width: 63px;
    height: 44px;
    vertical-align: middle;
    background: url(/assets/img/regulierung.webp) no-repeat 0 0;
    text-indent: -9999px;
}
.brand-details .ext {
    bottom: 0;
    left: 0;
    right: 0;
    top: auto;
}
.brand-details .ext td {
    padding: 0 10px 10px;
}
.brand-details .ext td a {
    max-width: 260px;
    display: table;
    padding: 10px 20px;
}
.brand-details .reg td:first-child span {
    display: none;
}
@media only screen and (min-width:480px) {
    .brand-details table {
    padding: 115px 0 0;
}
.brand-details .brand {
    right: auto;
    width: 50%}
.brand-details .brand td span {
    height: 54px;
}
.brand-details .rate {
    right: auto;
    width: 50%;
    top: 43px;
    border-bottom: 1px solid #b1b1b1;
}
.brand-details .rate td {
    padding-top: 17px;
    padding-bottom: 17px;
}
.brand-details .reg {
    top: 0;
    left: auto;
    width: 50%}
.brand-details .reg td {
    border-top: none;
}
.brand-details .ext {
    top: 60px;
    left: auto;
    width: 50%}
.brand-details .ext td {
    border-bottom: 1px solid #b1b1b1;
}
}@media only screen and (min-width:768px) {
    .brand-details .brand, .brand-details .rate {
    width: 210px;
}
.brand-details .ext, .brand-details .reg {
    width: 25%}
.brand-details table {
    padding: 17px 25% 17px 210px;
}
.brand-details .brand {
    bottom: 0;
    border-right: 2px solid #b1b1b1;
}
.brand-details .brand td span {
    height: 50px;
}
.brand-details .rate {
    bottom: 0;
    left: 0;
    top: 60px;
    margin: auto;
    text-align: center;
    font-size: 0;
    border: none;
}
.brand-details .rate td, .brand-details .rate td:first-child {
    display: inline-block;
    width: auto;
    float: none;
    padding-top: 2px;
    padding-bottom: 2px;
    vertical-align: middle;
    font-size: 16px;
}
.brand-details .reg td, .brand-details .reg td:first-child {
    display: inline-block;
    width: auto;
    height: auto;
    float: none;
    padding-top: 2px;
    padding-bottom: 2px;
    vertical-align: middle;
    font-size: 13px;
    line-height: normal;
}
.brand-details .rate:before, .brand-details .reg:before {
    content: "";
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}
.brand-details .reg {
    top: 0;
    bottom: 50px;
    margin: auto;
    text-align: center;
    font-size: 0;
    border-left: 2px solid #b1b1b1;
}
.brand-details .ext td, .brand-details .rate td {
    border: none;
}
.brand-details .ext {
    top: auto;
    bottom: 0;
    border-left: 2px solid #b1b1b1;
}
.brand-details .ext td {
    padding: 5px 10px;
}
.brand-details .ext td a {
    padding: 10px;
    display: block;
}
}