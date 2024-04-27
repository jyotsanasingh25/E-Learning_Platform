<?php
include('./adminheader.php');
?>

<div class="col-sm-9 mt-5">
<!--Table-->
    <p class="bg-dark text-white p-2">List of Courses</p>
        <table class="table">   
        <thead>
            <tr>
            <th scope="col">Course ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">22</th>
            <td>Learn Guitar</td>
            <td>GeekyShows</td>
            <td>
            <button
                type="submit"
                class="btn btn-info mr-3"
                name="view"
                value="View"
                <i class="fa fa-pen">View</i>
            </button>
                <button
                type="submit"
                class="btn btn-secondary"
                name="delete"
                value="Delete"
                <i class="far fa-trash-alt"> Delete</i>
                </button>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
    <!-- div Row close from header -->
     <div>
        <a class="btn btn-danger box" style="font-size: 25px;" href="Addcourses.php"
            ><i class="fas fa-plus fa-2x"></i
            >+</a>
        </div> 