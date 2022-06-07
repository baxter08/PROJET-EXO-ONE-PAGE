<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>

    function showlist(id){
        
        $.post('traitement.php',
     { liste_id: id, exemple: "bonjour", exemple2: 7890 },
     function(data){
         $('body').append(data);
     
    });

    }




</script>