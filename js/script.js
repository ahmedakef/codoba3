 $(document).ready(function() {

  $tmp_url = $('#tmp_url').val();

  $('#share').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/pages/share.html").slideToggle(800).addClass("row new information");              
  });

    $('#contactus').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/pages/contactus.html").slideToggle(800).addClass("row new information");              
  });

    $('#aboutcordoba').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/pages/aboutcordoba.html").slideToggle(800).addClass("row new information");              
  });

    $('#infographic').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/pages/infographic.html").slideToggle(800).addClass("row new information");              
  });

  $('a.top').click(function(){
  $(document.body).animate({scrollTop : 0}, 800);
  return false;
});

});
