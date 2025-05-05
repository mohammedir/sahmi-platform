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

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('kt_modal_add_user_form');

            const validator = FormValidation.formValidation(form, {
                fields: {
                    user_name: {
                        validators: {
                            notEmpty: {
                                message: '@lang("admin.Full Name Filed is required")',
                            }
                        }
                    },
                    user_email: {
                        validators: {
                            notEmpty: {
                                message: '@lang("admin.Email address is required")',
                            },
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: '@lang("admin.Invalid email address")',
                            }
                        }
                    },
                    user_role: {
                        validators: {
                            notEmpty: {
                                message: '@lang("admin.Role is required")',
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: 'is-invalid',
                        eleValidClass: 'is-valid',
                        messageClass: 'fv-help-block'
                    }),
                    submitButton: new FormValidation.plugins.SubmitButton()
                }
            });

            // AJAX Submit
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                validator.validate().then(function (status) {
                    if (status === 'Valid') {
                        const formData = new FormData(form);

                        $.ajax({
                            url: "{{ route('users.store') }}",
                            method: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                Swal.fire({
                                    text: "@lang('admin.User created successfully')",
                                    icon: "success",
                                    confirmButtonText: "@lang('admin.OK')",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                });
                                form.reset();
                                validator.resetForm(true);
                                // Close modal if needed: $('#kt_modal_add_user').modal('hide');
                            },
                            error: function (xhr) {
                                alert('There was an error.');
                            }
                        });
                    }
                });
            });
        });

    });

</script>
