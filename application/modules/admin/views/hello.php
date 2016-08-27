<div class="row">
	<div class="col s2 m2 l2">
		<div class="row">
			<div class="col s12 m12 l12" style="border : 1px solid red">
				<a onclick="change(1)">Hello comtent</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12" style="border : 1px solid red">
				<a onclick="change(2)">Hello comtent</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12" style="border : 1px solid red">
				<a onclick="change(3)">Hello comtent</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12" style="border : 1px solid red">
				Hello comtent
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12" style="border : 1px solid red">
				Hello comtent
			</div>
		</div>
	</div>
	<div class="col s10 m10 l10" style="border : 1px solid red" id="div1">
		<p>Hello worlsfhdffgdfgdfey set et ear</p>
		<p>wrys eryets ety aey e5y aey wrt etgsdh</p>
	</div>
	<div class="col s10 m10 l10" style="border : 1px solid red" id="div2">
		<p>Hello worlsfhdffgdfgdfey set et ear</p>
		<p>wrys ery 3245678e4657r64e657r45e65768w456578ey e5y aey wrt etgsdh</p>
	</div>
	<div class="col s10 m10 l10" style="border : 1px solid red" id="div3">
		<p>Hello worlsfhdffgdfgdfey set et ear</p>
		<p>wrys y wrt etgsdh</p>
	</div>
	<div class="col s10 m10 l10" style="border : 1px solid red" id="div4">
		<p>Hello worlsfhdffgdfgdfey set et ear</p>
		<p>wrys eryets ety aey e5y aey wrt etgsdh</p>
	</div>
</div>
<script type="text/javascript">
	function change(number)
	{
		for(i=1;i<=3;i++)
		{
			document.getElementById('div' + i).style.display = 'none';
		}
		document.getElementById('div' + number).style.display = 'block';
	}
</script>