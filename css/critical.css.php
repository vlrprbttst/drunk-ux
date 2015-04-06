html {
  box-sizing: border-box;
  font-size: 100%; }

*, *:before, *:after {
  box-sizing: inherit; }

body {
  margin: 0;
  padding: 0;
  font-family: "Raleway", sans-serif;
  text-shadow: 0 1px 0 #fff;
  overflow: hidden;
  background: #E4F1FE;
  font-size: 1em;
  line-height: 1.6em; }

img {
  max-width: 100%;
  border: 0;
  vertical-align: bottom; }

.header{
  background: #E4F1FE;
  color: #333; }
  .header:after{
    content: "";
    display: table;
    clear: both; }

.header {
  border-bottom: 5px solid #9acbfb;
  padding: 20px; }
  @media all and (max-width: 980px) {
    .header {
      padding: 5px; } }
  .header .left {
    float: left; }
    @media all and (max-width: 980px) {
      .header .left {
        height: auto; } }
    .header .left .logo {
      width: 40px;
      float: left;
      display: block; }
      @media all and (max-width: 980px) {
        .header .left .logo {
          width: 20px; } }
    .header .left h1 {
      float: left;
      font-family: "Lobster", cursive;
      margin: 0;
      padding: 20px 20px 0 10px;
      color: #9acbfb;
      font-size: 2.2em; }
      @media all and (max-width: 980px) {
        .header .left h1 {
          display: none; } }
  .header .center {
    width: auto;
    float: left;
    padding: 0 0 0 20px; }
    @media all and (max-width: 980px) {
      .header .center {
        padding: 0 0 0 10px; } }
    .header .center form label {
      display: block;
      margin: 0 0 5px; }
      @media all and (max-width: 980px) {
        .header .center form label {
          display: none; } }
  .header .right {
    float: right; }
    .header .right:after {
      content: "";
      display: table;
      clear: both; }

input {
  vertical-align: middle;
  margin: 0;
  padding: 0;
  border: 0;
  padding: 10px;
  border-radius: 3px;
  font-family: "Courier New", Courier, monospace;
  display: inline-block;
  width: 300px; }
  @media all and (max-width: 980px) {
    input {
      width: 220px; } }

button {
  box-shadow: none;
  padding: 10px 20px;
  font-family: 'courier';
  border: 0;
  color: #333;
  cursor: pointer;
  background: lightgrey;
  border-radius: 3px; }

.drunk {
  font-size: 19px;
  padding: 0.5em 1.5em;
  display: inline-block;
  cursor: pointer;
  border-radius: 5px;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FFB3F4AF', endColorstr='#FF5EE855');
  background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2IzZjRhZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzg4ZWU4MiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background: linear-gradient(#b3f4af, #88ee82);
  box-shadow: #f3fdf2 0 1px 0 inset;
  border: 1px solid #73eb6b;
  color: white;
  text-shadow: #44e43a 0 -1px 0;
  position: relative;
  padding: 20px;
  color: #333;
  text-shadow: 0 1px 0 white;
  border-radius: 10px;
  cursor: pointer;
  text-transform: uppercase; }
  .drunk::-moz-focus-inner {
    padding: 0 !important;
    margin: -1px !important; }
  @media all and (max-width: 600px) {
    .drunk {
      position: static;
      -webkit-transform: none;
          -ms-transform: none;
              transform: none;
      float: none;
      padding: 10px;
      margin: 0 0 0 20px; } }
  @media all and (max-width: 500px) {
    .drunk {
      position: static;
      -webkit-transform: none;
          -ms-transform: none;
              transform: none;
      float: none;
      padding: 10px;
      margin: 10px 0 0 30px; } }
  .drunk:after {
    width: 150px;
    height: 50px;
    background: url("../images/dist/sign.png") center center no-repeat;
    background-size: 100% auto;
    content: "";
    position: absolute;
    left: -160px;
    top: 0;
    opacity: .6; }
    @media all and (max-width: 401px) {
      .drunk:after {
        display: none; } }

.theframe {
  width: 100%;
  border: 0;
  vertical-align: bottom;
  position: relative; }