<?php

$header1 = [
    [
        'class' => 'fa fa-phone',
        'span' => 'Call : +01 123455678990',
    ],
    [
        'class' => 'fa fa-envelope',
        'span' => 'Email : demo@gmail.com',
    ],
    [
        'class' => 'fa fa-map-marker',
        'span' => 'Location',
    ]
];

$header = [
    [
        'name' => 'Home'
    ],
    [
        'name' => 'About'
    ],
    [
        'name' => 'Treatment'
    ],
    [
        'name' => 'Doctors'
    ],
    [
        'name' => 'Testimonials'
    ],
    [
        'name' => 'Contact Us'
    ]
];

$register = [
        [
            'name' => 'Login'
        ],
        [
            'name' => 'Sign Up'
        ]
];

$bookAppointment = [
    [
        'for' => 'inputPatientName',
        'text' => 'Patient Name',
        'addition' => '<input name="patientname" type="text" class="form-control" id="inputPatientName" placeholder="">'
    ],
    [
        'for' => 'inputDoctorName',
        'text' => 'Doctor Name',
        'addition' => '<select name="doctorname" class="form-control wide" id="inputDoctorName">
                    <option value="Normal distribution ">Normal distribution </option>
                    <option value="Normal distribution ">Normal distribution </option>
                    <option value="Normal distribution ">Normal distribution </option>
                    </select>'
    ],
    [
        'for' => 'inputDepartmentName',
        'text' => 'Departments Name',
        'addition' => '<select name="departmentname" class="form-control wide" id="inputDepartmentName">
                    <option value="Normal distribution ">Normal distribution </option>
                    <option value="Normal distribution ">Normal distribution </option>
                    <option value="Normal distribution ">Normal distribution </option>
                    </select>'
    ]
];

$bookAppointment1 = [
    [
        'for' => 'inputPhone',
        'text' => 'Phone number',
        'addition' => '<input name="phone" type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">'
    ],
    [
        'for' => 'inputSymptoms',
        'text' => 'Symptoms',
        'addition' => '<input name="symptom" type="text" class="form-control" id="inputSymptoms" placeholder="">'
    ],
    [
        'for' => 'inputDate',
        'text' => 'Choose Date',
        'addition' => '<div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
        <input name="date" type="text" class="form-control" readonly>
        <span class="input-group-addon date_icon">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </span>
      </div>'
    ],
];

$formRow1 = [
    [
        'for' => 'inputPatientName',
        'name' => 'Patient Name',
        'addition' => '<input type="text" class="form-control" id="inputPatientName" placeholder="">'
    ],
    [
        'for' => 'inputDoctorName',
        'name' => "Doctor's Name",
        'addition' => '<select name="" class="form-control wide" id="inputDoctorName">
                <option value="Normal distribution ">Normal distribution </option>
                <option value="Normal distribution ">Normal distribution </option>
                <option value="Normal distribution ">Normal distribution </option>
                </select>'
    ],
    [
        'for' => 'inputDepartmentName',
        'name' => "Department's Name",
        'addition' => ' <select name="" class="form-control wide" id="inputDepartmentName">
                <option value="Normal distribution ">Normal distribution </option>
                <option value="Normal distribution ">Normal distribution </option>
                <option value="Normal distribution ">Normal distribution </option>
                </select>'
    ]
];

$formRow2 = [
    [
        'for' => 'inputPhone',
        'name' => 'Phone Number',
        'addition' => ' <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">'
    ],
    [
        'for' => 'inputSymptoms',
        'name' => "Symptoms",
        'addition' => '<input type="text" class="form-control" id="inputSymptoms" placeholder="">'
    ],
    [
        'for' => 'inputDate',
        'name' => "Choose Date",
        'addition' => ' <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                        <input type="text" class="form-control" readonly>
                        <span class="input-group-addon date_icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                        </div>'
    ]
];

$hospitalTreatment = [
    [
        'image' => 'images/t1.png',
        'title' => 'Nephrologist Care'
    ],
    [
        'image' => 'images/t2.png',
        'title' => 'Eye Care'
    ],
    [
        'image' => 'images/t3.png',
        'title' => 'Pediatrician Clinic'
    ],
    [
        'image' => 'images/t4.png',
        'title' => 'Parental Care'
    ]
];

$carouselWrap = [
    [
        'src' => 'images/team1.jpg',
        'name' => 'Hennry'
    ],
    [
        'src' => 'images/team2.jpg',
        'name' => 'Jenni'
    ],
    [
        'src' => 'images/team3.jpg',
        'name' => 'Morco'
    ],



];

$testimonial = [
    [
        'class' => 'carousel-item active',
        'name' => 'Morijorch',
        'text' => "editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sitesstill in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
    ],
    [
        'class' => 'carousel-item',
        'name' => 'Rochak',
        'text' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ],
    [
        'class' => 'carousel-item',
        'name' => 'Brad Johns',
        'text' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
    ]

];

$carouselButtonBox = [
    [
        'a-class' => 'carousel-control-prev',
        'data-slide' => 'prev',
        'i-class' => 'fa fa-angle-left',
        'span' => 'Previos'
    ],
    [
        'a-class' => 'carousel-control-next',
        'data-slide' => 'next',
        'i-class' => 'fa fa-angle-right',
        'span' => 'Next'
    ]
];

$getInTouch = [
    [
        'type' => 'text',
        'class' => '',
        'placeholder' => 'Full Name',
        'name' => 'prenom'
    ],
    [
        'type' => 'email',
        'class' => '',
        'placeholder' => 'Email',
        'name' => 'e-mail'
    ],
    [
        'type' => 'text',
        'class' => '',
        'placeholder' => 'Phone Number',
        'name' => 'call'
    ],
    [
        'type' => 'text',
        'class' => 'message-box',
        'placeholder' => 'Message',
        'name' => 'notification'
    ]

];

$footerAddress = [
    [
        'class' => 'fa fa-map-marker',
        'aria-hidden' => 'true',
        'span' => 'location'
    ],
    [
        'class' => 'fa fa-phone',
        'aria-hidden' => 'true',
        'span' => 'Call +01 1234567890'
    ],
    [
        'class' => 'fa fa-envelope',
        'aria-hidden' => '',
        'span' => '  demo@gmail.com'
    ],
];

$socialBox = [
    [
        'class' => 'facebook',
    ],
    [
        'class' => 'twitter',
    ],
    [
        'class' => 'linkedin',
    ],
    [
        'class' => 'instagram',
    ],
];

$usefulLink = [
    [
        'class' => '',
        'href' => 'index.php',
        'text' => 'Home'
    ],
    [
        'class' => '',
        'href' => 'about.php',
        'text' => 'About'
    ],
    [
        'class' => 'active',
        'href' => 'index.php',
        'text' => 'Home'
    ],
    [
        'class' => 'active',
        'href' => 'index.php',
        'text' => 'Home'
    ],
    [
        'class' => 'active',
        'href' => 'index.php',
        'text' => 'Home'
    ],
    [
        'class' => 'active',
        'href' => 'index.php',
        'text' => 'Home'
    ],
];

$latestPosts = [
    
        [
            'image' => 'images/post1.jpg'
        ],
        [
            'image' => 'images/post2.jpg'
        ]
];

$latestPosts1 = [
    [
        'image1' => 'images/post3.jpg'
    ],
    [
        'image1' => 'images/post4.jpg'
    ]
];

$footer = [
    [
        'href' => 'index.php',
        'text' => 'Home'
    ],
    [
        'href' => 'about.php',
        'text' => 'About'
    ],
    [
        'href' => 'treatment.php',
        'text' => 'Treatment'
    ],
    [
        'href' => 'doctor.php',
        'text' => 'Doctors'
    ],
    [
        'href' => 'testimonial.php',
        'text' => 'Testimonial'
    ],
    [
        'href' => 'contact.php',
        'text' => 'Contact us'
    ]
];