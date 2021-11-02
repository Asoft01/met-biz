<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <!-- <div class="card profile-detail">
                            <div class="profile_img_container">
                                <img src="../images/profile_img.jpg" class="img-fluid rounded-circle profile_img" />
                                <p class="text-center mt-1"><a href="">Change Upload Image <i class="fa fa-camera"></i></a></p>

                            </div>
                            <div class="card-body">
                                <div class="row profile_row">
                                    <div class="col-12 text-center">

                                        <h3> Jane Doe Smith</h3>
                                    </div>
                                    <div class="col-12 text-center profile_position">
                                        Senior Manager at <br /> Chevron Oil and Gas
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 mx-auto text-center profile_name">
                                        Nigerian
                                    </div>

                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button class="btn btn-normal">Edit your information <i class="fa fa-chevron-right slide-icon"></i></button>
                                </div>
                            </div>
                        </div> -->
                    <ul class="list-group list-group-flush courses-breakdown">
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center active-course">Workplace Management Skills <span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Study skills for postgraduate learning<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz <span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>

                    </ul>
                    <div class="card help-info">
                        <div class="card-body">
                            <p>If you have any questions or get stuck please contact us in the relevant department</p>
                            <ul class="list-group list-help-issues">
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Academic Issues
                                        <span class="badge badge-pill"><i class="fa fa-briefcase"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Technical Issues
                                        <span class="badge badge-pill"><i class="fa fa-server"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Student Issues
                                        <span class="badge badge-pill"><i class="fa fa-graduation-cap"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Finance Issues
                                        <span class="badge badge-pill"><i class="fa fa-money"></i></span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="lecture-note-sect">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <h2>Drag n Drop</h2>
                            <div>
                                <div class="task-holder">
                                    <div class="drop-item drag-sect">
                                        <div class="task-box" draggable="true">
                                            <img src="<?php echo ROOT_DIR; ?>/images/cars.jpg" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                    <div class="drop-item drag-sect">
                                        <div class="task-box" draggable="true">
                                            <img src="<?php echo ROOT_DIR; ?>/images/plane.png" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                    <div class="drop-item drag-sect">
                                        <div class="task-box" draggable="true">
                                            <img src="<?php echo ROOT_DIR; ?>/images/ship.jpg" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                    <div class="drop-item drag-sect">
                                        <div class="task-box" draggable="true">
                                            <img src="<?php echo ROOT_DIR; ?>/images/train.jpg" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                </div>
                                <div class="drop-holder">
                                    <div class="drop-item drag-sect">

                                    </div>
                                    <div class="drop-item drag-sect">

                                    </div>
                                    <div class="drop-item drag-sect">

                                    </div>
                                    <div class="drop-item drag-sect">

                                    </div>
                                </div>
                                <button class="btn btn-danger reset">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const task_box = document.querySelectorAll(".task-box");
    const drop_item = document.querySelectorAll(".drop-item");
    const reset = document.querySelector(".reset")

    let draggedItem = null;

    for (let i = 0; i < task_box.length; i++) {
        const dragItem = task_box[i];

        dragItem.addEventListener("dragstart", function() {
            console.log("dragged");
            draggedItem = dragItem
            setTimeout(() => {
                dragItem.style.display = "none"
            }, 0)
        });

        dragItem.addEventListener("dragend", function() {
            console.log("dragend");
            setTimeout(() => {
                dragItem.style.display = "block"
                draggedItem = null
            }, 0)
        });

        dragItem.addEventListener("touchstart", function() {
            console.log("dragged");
            draggedItem = dragItem
            setTimeout(() => {
                dragItem.style.display = "none"
            }, 0)
        });

        dragItem.addEventListener("touchend", function() {
            console.log("dragend");
            setTimeout(() => {
                dragItem.style.display = "block"
                draggedItem = null
            }, 0)
        });



        for (let j = 0; j < drop_item.length; j++) {
            const dropItem = drop_item[j];

            dropItem.addEventListener("dragover", function(e) {
                e.preventDefault()
            })


            dropItem.addEventListener("dragenter", function(e) {
                e.preventDefault()
                this.style.backgroundColor = "rgba(0, 0, 0, 0.2)"
            })
            dropItem.addEventListener("dragleave", function(e) {
                this.style.backgroundColor = "rgba(0, 0, 0, 0.1)"
            })

            dropItem.addEventListener("drop", function(e) {
                this.append(draggedItem)
                this.style.backgroundColor = "rgba(0, 0, 0, 0.1)"
            })

        }
    }
    </script>


    <?php include_once('../components/footer.php'); ?>