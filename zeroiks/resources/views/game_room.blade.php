@if (1 == 0)
    <table id="board" border="1" cellpadding="5">
        <tbody>
            <tr>
                <td id="a0"></td>
                <td id="a1"></td>
                <td id="a2"></td>
            </tr>
            <tr>
                <td id="b0"></td>
                <td id="b1"></td>
                <td id="b2"></td>
            </tr>
            <tr>
                <td id="c0"></td>
                <td id="c1"></td>
                <td id="c2"></td>
            </tr>
        </tbody>
    </table>

    <script type="text/javascript">
    //IE 8 and below doesn't have String.trim() so have to add it

    var game={
        currentPlayer:"X",
         move:function(e){
            e=window.event||e;//IE uses window.event
            var src=e.target||e.srcElement;
            if(src.tagName==="TD"&&src.innerHTML.trim()===""){
                src.innerHTML=game.currentPlayer;
                game.currentPlayer=(game.currentPlayer==="X")?"O":"X";
            }
        }
    }

    var table=document.body.getElementsByTagName("table")[0];
    if(typeof table.addEventListener==="function"){
        table.addEventListener("click",game.move);
    }else if(typeof table.attachEvent){
        //for IE
        table.attachEvent("onclick", game.move);
    }
    </script>
     </body>
    </html>
@endif