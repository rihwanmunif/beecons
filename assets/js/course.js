$(document).ready(function () {
	let location = $("#card-kategori");
	$("#enroll").click(function () {
		$("html, body").animate(
			{
				scrollTop: location.offset().top,
			},
			1000
		);
	});

	// Format Rupiah
	var formatRupiah = function (num) {
		var str = num.toString().replace("", ""),
			parts = false,
			output = [],
			i = 1,
			formatted = null;
		if (str.indexOf(".") > 0) {
			parts = str.split(".");
			str = parts[0];
		}
		str = str.split("").reverse();
		for (var j = 0, len = str.length; j < len; j++) {
			if (str[j] != ",") {
				output.push(str[j]);
				if (i % 3 == 0 && j < len - 1) {
					output.push(".");
				}
				i++;
			}
		}
		formatted = output.reverse().join("");
		return "" + formatted + (parts ? "." + parts[1].substr(0, 2) : "");
	};

	//   ------------------------------   ///
	//   Course **
	//   ------------------------------   ///
	function showCourse(title) {
		$("#daftar-course").html("");
		if (title != undefined) {
			var url = "https://lms.lazy2.codes/api/course/find/" + title;
		} else {
			var url = "https://lms.lazy2.codes/api/course";
		}
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function (course) {
				// console.log(course);
				$.each(course, function (i, data) {
					var i = data.course_id;
					if (i % 3 == 0) {
						var level = "Advance";
					} else if (i % 2 == 0) {
						var level = "Intermediate";
					} else if (i % 1 == 0) {
						var level = "Basic";
					}
					$("#daftar-course").append(
						`	
					<div class="col-lg-3 col-md-6 course-card">
					<div class="course-item" style="background-color:#F0F0F0;box-shadow: 2px 2px 2px grey;">
					<div class="position-relative overflow-hidden">
					<a href="course/details_course/${data.course_id}"><img class="img-fluid" style="width: 100%; height: 60%;" data-url="/course/details_course/${data.course_id}" src="assets/img/course/course-1.png" alt="" ></a>
					<div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4 course-level" style="padding-top: 5px; ">
						<label class="flex-shrink-0 btn-sm btn-light course-level" style="border-radius: 0 5px 5px 0;"><b>${level}</b></label>
					</div>
					<div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
						<label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b>Rp ` +
							formatRupiah(data.new_price) +
							`</b></label>
					</div>
					</div>
					<div class="text-decoration p-4 pb-0 ">
						<a href="course/details_course/${data.course_id}"><h6 class="mb-3" style="font-size:16px; font-weight:bold; height:100%; margin: 0px 0px 8px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" >${data.title}</h6></a>
					<button type="button" class="btn btn-warning mb-4" style="border-radius: 5px; font-weight:bold; width:80%;" data-bs-toggle="modal" data-bs-target="#signin"><b>Buy</b></button>
					<button type="button" class="btn btn-outline-warning mb-4" style="border-radius: 5px; font-weight:bold; color:#000;" data-bs-toggle="modal" data-bs-target="#signin"><i class="bi bi-cart-plus-fill"></i></button>
					</div>
					</div>
					</div>

					<!-- Modal Login -->
					<div class="modal fade" id="signin" tabindex="-10" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
					<div class="modal-body">
						<div class="close-modal-login text-dark d-flex justify-content-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
						<h5 class="modal-title text-center" id="exampleModalLabel">Sign In Akun</h5>
						<div class="message-register success my-3"></div>
						<!-- Email input -->
						<div class="mb-3">
						<label class="form-label" for="form3Example3">Email</label>
						<input type="email" name="email" id="form3Example3" class="form-control form-control-md" placeholder="Enter email" required>

						</div>
						<div class="mb-3">
						<!-- Password input -->
						<label class="form-label" for="formPassword">Password</label>
						<input type="password" id="formPassword" class="form-control form-control-md" placeholder="Enter password" />
						</div>
						<div class="mb-3">
						<button type="submit" class="btn btn-warning w-100" name="login"><b>Masuk</b></button>
						</div>
					</div>
					</div>
					</div>
					
					      </div>`
					);
				});
				hrefFunc();
				selectKategori();
			},
			error: function (err) {
				if (err.status == 404) {
					$("#daftar-course").html(`
		    <div class="col-12 text-center">
		        <h3>Course Tidak Ditemukan</h3>
		    </div>
	      `);
				}
			},
		});
	}
	showCourse();

	//   jika user menekan tombol cari
	let inputSearch = $("#inputSearchCourse");
	let btnSearch = $("#btnSearchCourse");
	btnSearch.click(function () {
		let search = inputSearch.val();
		if (search != "") {
			$("#card-kategori .list a").removeClass("active");
			showCourse(search);
		} else {
			$("#card-kategori .list a#all").addClass("active");
			showCourse();
		}
	});

	//   jika user menekan tombol enter
	inputSearch.on("keyup", function (e) {
		if (e.keyCode === 13) {
			if (inputSearch.val() != "") {
				$("#card-kategori .list a").removeClass("active");
				showCourse(inputSearch.val());
			} else {
				$("#card-kategori .list a #all").addClass("active");
				showCourse();
			}
		}
	});

	//   jika user menekan tombol kategori all
	$("#card-kategori .list a #all").click(function () {
		$("#card-kategori .list a").removeClass("active");
		$(this).addClass("active");
		showCourse();
	});

	//   Kategori course

	selectKategori = function () {
		// BASIC
		let basic = $("#card-kategori .list a #basic");
		basic.click(function () {
			$("#card-kategori .list a").removeClass("active");
			$(this).addClass("active");
			let txt = $(this).text();
			let cardCourseLevel = $("#daftar-course .course-item .course-level");
			$.each(cardCourseLevel, function (i, data) {
				if ($(data).text() == txt) {
					$(data).parent().parent().parent().show();
				} else {
					$(data).parent().parent().parent().hide();
				}
			});
		});
		// INTERMEDIATE
		let intermediate = $("#card-kategori .list a #intermediate");
		intermediate.click(function () {
			$("#card-kategori .list a").removeClass("active");
			$(this).addClass("active");
			let txt = $(this).text();
			let cardCourseLevel = $("#daftar-course .course-item .course-level");
			$.each(cardCourseLevel, function (i, data) {
				if ($(data).text() == txt) {
					$(data).parent().parent().parent().show();
				} else {
					$(data).parent().parent().parent().hide();
				}
			});
		});
		// ADVANCE
		let advance = $("#card-kategori .list a #advance");
		advance.click(function () {
			$("#card-kategori .list a").removeClass("active");
			$(this).addClass("active");
			let txt = $(this).text();
			let cardCourseLevel = $("#daftar-course .course-item .course-level");
			$.each(cardCourseLevel, function (i, data) {
				if ($(data).text() == txt) {
					$(data).parent().parent().parent().show();
				} else {
					$(data).parent().parent().parent().hide();
				}
			});
		});
	};
});
