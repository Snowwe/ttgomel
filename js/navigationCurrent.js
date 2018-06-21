try {
    var el = document.getElementById('menu').getElementsByTagName('a');
    var url = document.location.href;
    console.log(url);
    for (var i = 0; i < el.length; i++) {
        if (url == el[i].href) {
            el[i].className += ' current_menu';
        }
        ;
    }
    ;
} catch (e) {
    console.log("exception_1");
}

// try {
//     var elem = document.getElementsByTagName("label")[0].attributes[3];
//     console.log(elem);
//     console.log(elem.attributes.style());
// if(elem=="&#9932;"){
//     elem.setAttribute("style","width:100px");
// }
//
// } catch (e) {
//     console.log("exception_2");
// }





