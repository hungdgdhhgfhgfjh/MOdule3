
<style>
button{
width: 100%;
background-color:green;
}
</style>
<table border="1px">
<tr>
<td colspan="4" ><input id="number" type="text" width="100%"></td>
</tr>
<tr>
<td><button onclick="number(1)" >1</button></td>
<td><button onclick="number(2)" >2</button></td>
<td><button onclick="number(3)" >4</button></td>
<td><button onclick="number(5)" >5</button></td>
</tr>
<tr>
<td><button onclick="number(6)" >6</button></td>
<td><button onclick="number(7)" >7</button></td>
<td><button onclick="number(8)" >8</button></td>
<td><button onclick="number(9)" >9</button></td>
</tr>
<tr>
<td><button onclick="number(0)" >0</button></td>
<td><button onclick="number('+')" >+</button></td>
<td><button onclick="number('-')" >-</button></td>
<td><button onclick="number('*')" >*</button></td>
</tr>
<tr>
<td><button onclick="number('/')" >/</button></td>
<td><button onclick="tinh()" >=</button></td>
<td><button onclick="clean()" >C</button></td>
<td><button onclick="clean()" >AC</button></td>
</tr>
</table>
<script type="text/javascript">
    	function number( gia_tri ){
    		let number = document.getElementById('number');
    		number.value = number.value + gia_tri;//rỗng + gia_tri => number.value

    	}

    	function clean(){
    		let number 	= document.getElementById('number');
    		number.value = '';
    	}

    	function tinh(){
    		let number 	= document.getElementById('number');
    		let value 	= number.value;
    		let ket_qua = eval( value );//12+3 => 15

    		number.value = ket_qua;

    	}
    </script>