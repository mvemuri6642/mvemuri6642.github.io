<?php
?>

<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="adminStyle.css">
    <script src="admin.js"></script>

</head>
<body>
<header id="main-header">
    <div class="container">
        <h1>Admin</h1>
    </div>
</header>

<!--<nav id="navbar">
    <div class="container">
        <ul>
           <li> <a href="https://www.google.com">Products</a> </li>
            <li><a href="#">Categories</a> </li>
            <li><a href="#">Employees</a> </li>
            <div id="logout">
                <button type="submit" name="logout">Logout</button>
            </div>

        </ul>



    </div> <!-- container ending here
</nav> -->

<nav id="navbar">
    <div class="container">
        <div class="bgroup">

            <button class="tablink" onclick="openTab1(event,'Home')">Home</button>

            <button type="button" class="tablink" onclick="openTab1(event,'Products')">Products</button>
            <button type="button" class="tablink" onclick="openTab1(event,'Categories')">Categories</button>
            <button type="button" class="tablink" onclick="openTab1(event,'Employees')">Employees</button>

        </div>
        <div id="logout">
            <button type="submit" name="logout" onclick="logout()">Logout</button>
        </div>
    </div> <!-- container ending here -->
</nav>

<div id="Home" class="tabcontent">
    <div class="homeClass">
        <div class="container">
            <div class="inputFields">
                <section id="tabHeader">
                    <div class="container">
                        <h1>Welcome Manohar</h1>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>






<div id="Products" class="tabcontent" style="display: none">
    <div class="productClass">
        <div class="container">
            <div class="inputFields">
                <section id="tabHeader">
                    <div class="container">
                        <h1>Products</h1>
                    </div>
                </section>
                <form class="my-form">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="ID">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="qty">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select style="width: 150px">
                            <option value="">Electronics</option>
                            <option value="">Furniture</option>
                        </select>
                    </div>

                </form>


                <form class="buttons-group" action="" method="POST"  class="container">
                    <div class="buttonClass">
                        <div class="button-group">
                            <button type="submit">Add</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Edit</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Delete</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Refresh</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Clear</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>




        <div class="container">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Category</th>

                </thead>
                <tr>
                    <td>1</td>
                    <td>Apple MacBook</td>
                    <td>50</td>
                    <td>150000</td>
                    <td>Electronics</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>HP Laptop</td>
                    <td>12</td>
                    <td>75000</td>
                    <td>Electronics</td>
                </tr>
            </table>
        </div>

    </div>

</div>





<!-- Categories Page -->


<div id="Categories" class="tabcontent" style="display: none">
    <div class="categoriesClass">
        <div class="container">
            <div class="inputFields">
                <section id="tabHeader">
                    <div class="container">
                        <h1>Categories</h1>
                    </div>
                </section>
                <form class="my-form">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="ID">

                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" id="desc">
                    </div>

                </form>


                <form class="button-group" action="" method="post" class="container">
                    <div class="buttonClass">
                        <div class="button-group">
                            <button type="submit">Add</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Edit</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Delete</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Refresh</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Clear</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <div class="container">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                </thead>
                <tr>
                    <td>1</td>
                    <td>Electronics</td>
                    <td>############</td>
                </tr>
            </table>
        </div>
    </div>
</div>




<!--- Employee Data -->

<div id="Employees" class="tabcontent" style="display: none">
    <div class="categoriesClass">
        <div class="container">
            <div class="inputFields">
                <section id="tabHeader">
                    <div class="container">
                        <h1>Employees</h1>
                    </div>
                </section>
                <form class="my-form" >
                    <div class="form-group">
                        <label>ID</label>
                        <input autocomplete="false" type="text" name="ID" >
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" style="width: 250px">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select style="width: 150px;">
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>

                </form>


                <form class="button-group" action="" method="post" class="container">
                    <div class="buttonClass">
                        <div class="button-group">
                            <button type="submit">Add</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Edit</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Delete</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Refresh</button>
                        </div>
                        <div class="button-group">
                            <button type="submit">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




        <div class="container">
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                </thead>
                <tr>
                    <td>18113251</td>
                    <td>Manohar</td>
                    <td>s@gmail.com</td>
                    <td>manu</td>
                    <td>Male</td>

                </tr>

            </table>
        </div>
    </div>
</div>



</header>
</body>



</html>
