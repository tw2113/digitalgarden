<?php wp_footer(); ?>

<script>
    let hex = [
        'a', 'b', 'c', 'd', 'e', 'f',
        '1', '2', '3', '4', '5', '6', '7', '8', '9'
    ];

    Array.prototype.random = function () {
        return this[Math.floor((Math.random()*this.length))];
    }
    let hexcolorer = function() {
        let hexcolor = '#';
        for( let i = 1; i<7; i++) {
            hexcolor += hex.random();
        }
        return hexcolor;
    };

    let plants = document.querySelectorAll(".plant");
    plants.forEach(function(i, index){
        i.style.borderColor = hexcolorer();
    });

</script>
</body>
</html>