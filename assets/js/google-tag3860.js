function include(file, id) {
    var script = document.createElement('script');
    script.src = file;
    script.id = id;
    script.type = 'text/javascript';
    script.defer = true;
    document.getElementsByTagName('head').item(0).appendChild(script);
}

include('https://www.googletagmanager.com/gtag/js?id=G-ZZF6D056W5','');   
window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZZF6D056W5');
// <!-- Google tag (gtag.js) -->
/* <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZZF6D056W5"></script>

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZZF6D056W5'); */