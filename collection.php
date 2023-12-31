<?php include "dbcon.php";
include "link.php";

if (isset($_POST['submit'])) {
    $name =  mysqli_real_escape_string($con, $_POST['name']);
    $lastname =  mysqli_real_escape_string($con, $_POST['lastname']);
    $age =  mysqli_real_escape_string($con, $_POST['age']);
    $gender =  mysqli_real_escape_string($con, $_POST['gender']);
    $height =  mysqli_real_escape_string($con, $_POST['height']);
    $weight =  mysqli_real_escape_string($con, $_POST['weight']);
    $bmi =  mysqli_real_escape_string($con, $_POST['bmi']);
    $bp =  mysqli_real_escape_string($con, $_POST['bp']);
    $heartrate =  mysqli_real_escape_string($con, $_POST['heartrate']);
    $oxygen =  mysqli_real_escape_string($con, $_POST['oxygen']);


    $insertquery = "INSERT INTO COLLECTION (name,lastname,age,gender, height, weight, bmi, bp,heartrate, oxygen)values('$name','$lastname','$age','$gender','$height','$weight','$bmi','$bp','$heartrate','$oxygen')";
    $iquery = mysqli_query($con, $insertquery);
    if ($iquery) {
?>
        <script>
            alert("Entered successfully");
            location.replace("visualization.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Error Occured. Please Try Again..... ");
        </script>
<?php
    }
}

?>
<html lang="en" class="dark" style="--color-primary: 0 174 239; --color-secondary: 0 51 153; --plyr-color-main: #00AEEF;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#FE006F">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-sans vsc-initialized">
    <div id="app" data-v-app=""><!---->
        <div class="modals-container"></div>
        <div class="bg-white overflow-hidden" data-testid="site-content">
            <div class="relative isolate z-10" client:load="">
                <div class="px-6 py-6 lg:px-8">
                    <nav class="grid place-items-center" aria-label="Global"><a href="index.php" class="flex items-center lg:flex-1 flex-shrink-0 space-x-2"><img class="w-auto h-8" src="https://storage.googleapis.com/mixo-files/logos/healthDataCollector-1688720429299.svg" alt="HealthDataCollector logo">
                            <p class="font-sans font-bold text-gray-900 text-2xl">HealthDataCollector</p>
                        </a>
                        <div class="flex items-center space-x-2 lg:hidden"><!----><!----></div>
                        <div class="hidden lg:flex lg:gap-x-12"></div>
                        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:space-x-4"><!----></div>
                    </nav>
                    <div style="position: fixed; height: 0px; padding: 0px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px; display: none;">
                    </div>
                </div>
            </div><!---->
            <div class="section-spacing ">
                <section id="aif76d85" class="overflow-hidden lg:relative pt-12 sm:pt-5 md:pt-5 lg:pt-5" sectionname="hero" sectionlabel="Hero" sortorder="0">
                    <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24 relative z-10">
                        <div class="relative z-[1]"><!---->
                            <div class="mb-20">
                                <form action="" method="post">

                                    <div class="mt-6 sm:max-w-xl">
                                        <div class="border-b border-gray-900/10 pt-12">
                                            <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information
                                            </h2>
                                            <p class="mt-1 text-sm leading-6 text-gray-600">Comprehensive Details on Cutting-Edge Medical Advances and Services</p>

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="sm:col-span-3">
                                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">First
                                                        name</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="name" id="name" autocomplete="given-name" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Last
                                                        name</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:row-span-1">
                                                    <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                                                    <div class="mt-2">
                                                        <input id="age" name="age" type="number" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>

                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                                                    <div class="mt-2">
                                                        <select id="gender" name="gender" autocomplete="Gender" class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" required>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2 sm:col-start-1">
                                                    <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height (cm)</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="height" id="height" autocomplete="address-level2" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">weight</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="weight" id="weight" autocomplete="address-level1" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <label for="bmi" class="block text-sm font-medium leading-6 text-gray-900">BMI</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="bmi" id="bmi" autocomplete="postal-code" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2 sm:col-start-1">
                                                    <label for="bp" class="block text-sm font-medium leading-6 text-gray-900">Blood Pressure</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="bp" id="bp" autocomplete="address-level2" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <label for="heartrate" class="block text-sm font-medium leading-6 text-gray-900">Heartrate</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="heartrate" id="heartrate" autocomplete="address-level1" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <label for="oxygen" class="block text-sm font-medium leading-6 text-gray-900">Oxygen</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="oxygen" id="oxygen" autocomplete="postal-code" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!---->
                                    <div class="mt-10 mb-6"><!----><!---->
                                        <div>
                                            <button to="" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-4 text-center mb-2 " name="submit" type="submit">Save to the Database</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <div class="sm:pl-6">
                            <div class="pt-12 pb-14 sm:relative lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 z-20">
                                <div class="hidden sm:block">
                                    <div class="absolute inset-y-0 w-screen left-1/2 bg-gray-50 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full">
                                    </div><svg class="absolute -mr-3 top-8 right-1/2 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                                        <defs>
                                            <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                                            </pattern>
                                        </defs>
                                        <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)">
                                        </rect>
                                    </svg>
                                </div>
                                <div class="relative pl-4 ml-auto sm:max-w-3xl sm:px-0 lg:h-full lg:max-w-none lg:flex lg:items-center xl:pl-12">
                                    <!----><img class="shadow-2xl shadow-indigo-500 
                                        w-full rounded-3xl lg:w-auto 2xl:h-full 2xl:max-w-none 2xl:rounded-3xl" src="https://img.freepik.com/free-vector/employees-cv-candidates-resume-corporate-workers-students-id-isolate-flat-design-element-job-applications-avatars-personal-information_335657-145.jpg" alt="HealthDataCollector">
                                </div>
                            </div>
                        </div>
                </section>


            </div>
        </div>

        <footer class="bg-white ">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="" class="flex items-center">
                            <img src="https://storage.googleapis.com/mixo-files/logos/healthDataCollector-1688720429299.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap ">HealthDataCollector</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Resources</h2>
                            <ul class="text-gray-500  font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Follow us</h2>
                            <ul class="text-gray-500  font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Legal</h2>
                            <ul class="text-gray-500  font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center ">© 2023 <a href="https://flowbite.com/" class="hover:underline">HealthDataCollector</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                            </svg>
                            <span class="sr-only">Discord community</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>



</body>

</html>