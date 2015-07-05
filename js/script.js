 $(document).ready(function() {

  $tmp_url = $('#tmp_url').val();

  $('#share').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/share.html").slideToggle(800).addClass("row new information");              
  });

    $('#contactus').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/contactus.html").slideToggle(800).addClass("row new information");              
  });

    $('#aboutcordoba').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/aboutcordoba.html").slideToggle(800).addClass("row new information");              
  });

    $('#infographic').click(function (){
    	$("#information").html('');
       $("#information").load($tmp_url+"/infographic.html").slideToggle(800).addClass("row new information");              
  });

});
