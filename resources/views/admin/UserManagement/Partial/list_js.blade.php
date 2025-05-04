<script>
    $(document).ready(function () {
        let table = $("#kt_table_users").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.getUsers') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'role', name: 'role', defaultContent: '-' },
                { data: 'last_login_at', name: 'last_login_at', defaultContent: '-' },
                { data: 'two_step', name: 'two_step', defaultContent: '-' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            searching: false,
            order: [[0, 'desc']],
            createdRow: function (row, data, dataIndex) {
                // Add class to the second cell (name column)
                $('td', row).eq(1).addClass('d-flex align-items-center');
            },
            drawCallback: function () {
                // 🔁 Re-initialize dropdown menu after each table draw
                if (typeof KTMenu !== 'undefined') {
                    KTMenu.createInstances(); // Metronic's JS function
                }
            }
        });

        $('#kt_modal_add_user_form').submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('users.store') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the response, e.g., close modal and update user list
                    alert('User created successfully');

                },
                error: function(xhr) {
                    // Handle errors
                    alert('There was an error.');
                }
            });
        });

    });

</script>
