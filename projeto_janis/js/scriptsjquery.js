$(	/*menu retratil*/
	function(){
 	$('a.link_principal').hover(function() {
 	//pega a posiçao do elemento
 	var posicao = $("this").offsetLeft;	

    // Expande ou retrai o elemento ul.sub-menu dentro do elemento pai (ul#menu li.parent)
    $('ul.submenu', $(this).parent()).slideToggle('fast', function() {
      // Depois de expandir ou retrair, troca a classe 'aberto' do <a> clicado
      $(this).parent().toggleClass('aberto');
    });
    return false;
  });


});