import './bootstrap';
import 'preline'
import _ from 'lodash';
import ApexCharts from 'apexcharts';
import 'apexcharts/dist/apexcharts.css';
console.log(_.chunk(['a', 'b', 'c', 'd'], 2)); // Output: [['a', 'b'], ['c', 'd']]
const chart = new ApexCharts(document.querySelector("#chart"), {
    chart: {
        type: 'bar',
    },
    series: [{
        name: 'example',
        data: [10, 20, 30],
    }],
});
chart.render();

import Swal from 'sweetalert2';
const SwalWithTailwind = Swal.mixin({
    customClass: {
      confirmButton: 'bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700',
      cancelButton: 'bg-gray-500 text-white font-bold py-2 px-4 rounded hover:bg-gray-700'
    },
    buttonsStyling: false, // Disable default styles
  });
