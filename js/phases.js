
window.addEventListener('load', _init_, false);


function _init_()	{
	
	fields();
	marked_field();
	
}//End Of Function



function fields()	{

	var fname = document.getElementById('fname');
	var byear = document.getElementById('b_year');
	var country = document.getElementById('country');
	
	count1 = count2 = count3 = 0;
	
	fname.oninput = function ()	{	count1 = fname.value.length;		};
	byear.oninput = function ()	{	count2 = byear.value.length;		};
	country.oninput = function ()	{	count3 = country.value.length;		};
	
}//End Of Function


function marked_field()	{

	var mf = document.getElementById('marked_field');
	var sb = document.getElementById('sub_but');
	
	if( count1 == 0 || count2 == 0 || count3 == 0 )		{
		mf.style.color= 'red';
		sb.style.visibility = 'hidden';
	}
	else	{
		mf.style.color= 'blue';	
		sb.style.visibility = 'visible';
	}	
	
	setTimeout( marked_field , 500 );
		
}//End Of Function