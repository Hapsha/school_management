<?php session_start(); 

include('header.php');

  $query= "SELECT * FROM students";
   $result=$db->query($query);
   $rowcount=mysqli_num_rows($result);
   
   $query1= "SELECT * FROM teachers";
   $result1=$db->query($query1);
   $rowcount1=mysqli_num_rows($result1);
   
   
   $query2= "SELECT * FROM attendance_records";
   $result2=$db->query($query2);
   $rowcount2=mysqli_num_rows($result2);
?>

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>


<div class="container nt_image">
 <h2>Admin Dashboard<h2>

	<div class="row">
		<div class="col-md-8">
			<div class="month">      
			  <ul>
				<li class="prev">&#10094;</li>
				<li class="next">&#10095;</li>
				<li>
				  August<br>
				  <span style="font-size:18px">2017</span>
				</li>
			  </ul>
			</div>

			<ul class="weekdays">
			  <li>Mo</li>
			  <li>Tu</li>
			  <li>We</li>
			  <li>Th</li>
			  <li>Fr</li>
			  <li>Sa</li>
			  <li>Su</li>
			</ul>

			<ul class="days">  
			  <li>1</li>
			  <li>2</li>
			  <li>3</li>
			  <li>4</li>
			  <li>5</li>
			  <li>6</li>
			  <li>7</li>
			  <li>8</li>
			  <li>9</li>
			  <li><span class="active">10</span></li>
			  <li>11</li>
			  <li>12</li>
			  <li>13</li>
			  <li>14</li>
			  <li>15</li>
			  <li>16</li>
			  <li>17</li>
			  <li>18</li>
			  <li>19</li>
			  <li>20</li>
			  <li>21</li>
			  <li>22</li>
			  <li>23</li>
			  <li>24</li>
			  <li>25</li>
			  <li>26</li>
			  <li>27</li>
			  <li>28</li>
			  <li>29</li>
			  <li>30</li>
			  <li>31</li>
			</ul>
		</div>
			
		<div class="col-md-4 text-center">
			<div class="row">
				<div class="col-md-12">
					<div class="dash-st">
						<i class="fa fa-users"></i>
						<h4>Students</h4>
						<?php echo "<h5>$rowcount</h5>";	?>
					</div>
				</div>
				<div class="col-md-12 top">
					<div class="dash-st1">
						<i class="fa fa-user-circle"></i>
						<h4>Teacher</h4>
						<?php echo "<h5>$rowcount1</h5>";	?>
					</div>
				</div>
				<div class="col-md-12 top">
					<div class="dash-st2">
						<i class="fa fa-industry"></i>
						<h4>Attendance</h4>
						<?php echo "<h5>$rowcount2</h5>";	?>
					</div>
				</div>
			</div>
		</div>
	
		
		
	 </div>
 
 </div>

<?php
include('footer.php');
?>