




let select_time = document.getElementById("select_time")

let time = [
    "            7 am",
    "            8 am",
    "            9 am",
    "            10 am",
    "            11 am",
    "            12 pm",
    "            16 pm",
    "            17 pm",
    "            18 pm",
    "            19 pm",
    "            20 pm",
    "            21 pm",
];

time.forEach(function(timeValue) {
    let option = document.createElement('option');
    option.value = timeValue;
    option.text = timeValue;
    option.setAttribute("name", "time")
    // option.setAttribute("value", "time")
    select_time.add(option);
});