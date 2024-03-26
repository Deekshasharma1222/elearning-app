<script>
    $(document).ready(function(){
        $('button.login').click(function(){
            $('.header').fadeToggle(200,function(){
                 console.log('now show');
            });
        })
    });

</script>