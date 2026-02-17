import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';
import DataTable from 'datatables.net-bs5';

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.datatable').forEach(function (table) {
        new DataTable(table);
    });
});

export default DataTable;
