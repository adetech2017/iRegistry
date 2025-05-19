<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagos State | Printer Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-blue: #0239ae;
            --dark-blue: #012677;
            --primary-red: #eb001f;
            --light-gray: #f8f9fa;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .form-container {
            max-width: 1300px;
            margin: 2rem auto;
            padding: 3rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            border-top: 5px solid var(--primary-blue);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .form-header h2 {
            color: var(--dark-blue);
            font-weight: 700;
            margin-top: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .form-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-red);
        }
        
        .form-header img {
            height: 90px;
            margin-bottom: 1rem;
        }
        
        .form-header p {
            max-width: 800px;
            margin: 1rem auto 0;
            color: #555;
            font-size: 1.05rem;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-blue);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .form-label .required {
            color: var(--primary-red);
            margin-left: 4px;
        }
        
        .form-control, .form-select {
            padding: 0.75rem 1rem;
            border-radius: var(--border-radius);
            border: 1px solid #ddd;
            margin-bottom: 1.25rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.25rem rgba(2, 57, 174, 0.15);
        }
        
        .radio-group {
            margin-bottom: 1.25rem;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .btn-primary {
            background-color: var(--primary-blue);
            border: none;
            padding: 0.75rem 2.5rem;
            font-weight: 600;
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-blue);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .btn-outline-primary {
            border-color: var(--primary-blue);
            color: var(--primary-blue);
            border-radius: var(--border-radius);
            padding: 0.75rem 2rem;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .section-title {
            color: var(--primary-blue);
            font-weight: 600;
            margin: 2rem 0 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 10px;
            font-size: 1.5rem;
        }
        
        .printer-table {
            margin: 2rem 0;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }
        
        .printer-table th {
            background-color: var(--primary-blue);
            color: white;
            font-weight: 600;
            padding: 1rem;
            text-align: center;
            vertical-align: middle;
        }
        
        .printer-table td {
            vertical-align: middle;
            padding: 1rem;
            background-color: white;
        }
        
        .printer-table input, .printer-table select {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: all 0.2s ease;
        }
        
        .printer-table input:focus, .printer-table select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(2, 57, 174, 0.1);
        }
        
        .btn-danger {
            padding: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: var(--border-radius);
            margin-bottom: 1.5rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .success-message i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .form-section {
            background-color: rgba(2, 57, 174, 0.03);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            margin-bottom: 2rem;
            border-left: 4px solid var(--primary-blue);
        }
        
        .form-section-title {
            color: var(--dark-blue);
            font-weight: 600;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .form-section-title i {
            margin-right: 10px;
            color: var(--primary-blue);
        }
        
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
            }
            
            .printer-table {
                display: block;
                overflow-x: auto;
            }
            
            .btn-responsive {
                width: 100%;
                margin-bottom: 10px;
            }
            
            .btn-group-responsive {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="form-container">
            <div class="form-header">
                <img src="{{ asset('logo/lagos.png') }}" alt="Lagos State Logo" class="img-fluid">
                <h2>LAGOS STATE MINISTRY OF INNOVATION, SCIENCE & TECHNOLOGY (MIST)</h2>
                <p class="text-muted">
                    The purpose of this survey is to gather and consolidate data on the total number of computer printers in use across the Lagos Public Service. The findings will serve as a baseline for assessing current printer usage and informing potential recommendations regarding their management within the service.
                    We kindly request your participation in this survey and encourage you to provide accurate and honest responses to ensure the reliability of the data collected.
                </p>
            </div>

            @if(session('success') || session('error') || $errors->any())
                <div class="message-container">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            @endif

            <form method="POST" action="{{ route('submit.organizationForm') }}">
                @csrf

                <div class="form-section">
                    <h5 class="form-section-title">
                        <i class="bi bi-person-badge"></i>Respondent Information
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="designation" class="form-label">Designation <span class="required">*</span></label>
                            <input type="text" class="form-control" id="designation" name="designation" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="position" class="form-label">Position <span class="required">*</span></label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email <span class="required">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="mda" class="form-label">Ministry/Agency (MDA) <span class="required">*</span></label>
                        <select class="form-control @error('ministry_id') is-invalid @enderror" name="ministry_id" required>
                            <option value="">-- Select Ministry --</option>
                            @foreach ($ministries as $ministry)
                                <option value="{{ $ministry->id }}" {{ old('ministry_id') == $ministry->id ? 'selected' : '' }}>
                                    {{ $ministry->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h5 class="form-section-title">
                        <i class="bi bi-building"></i>Department Information
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="dept_count" class="form-label">How many departments/units in your organization?</label>
                            <input type="number" class="form-control" id="dept_count" name="dept_count">
                        </div>
                        <div class="col-md-6">
                            <label for="dept_list" class="form-label">List all departments/units (separate with commas)</label>
                            <textarea class="form-control" id="dept_list" name="dept_list" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h5 class="form-section-title">
                        <i class="bi bi-printer"></i>Printer Information
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Does your organization have printers? <span class="required">*</span></label>
                            <div class="radio-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="has_printers" id="has_printers_yes" value="1" required>
                                    <label class="form-check-label" for="has_printers_yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="has_printers" id="has_printers_no" value="0">
                                    <label class="form-check-label" for="has_printers_no">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="printer_count" class="form-label">Total number of printers in your organization</label>
                            <input type="number" class="form-control" id="printer_count" name="printer_count">
                        </div>
                    </div>
                </div>

                <h5 class="section-title">
                    <i class="bi bi-list-check"></i>Printer Inventory Details
                </h5>

                <div class="alert alert-info">
                    <i class="bi bi-info-circle-fill me-2"></i>
                    Please provide details for each printer in your organization. Click "Add Printer" to add more rows as needed.
                </div>

                <div class="table-responsive printer-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20%">Printer Name</th>
                                <th style="width: 15%">Model Number</th>
                                <th style="width: 10%">Quantity</th>
                                <th style="width: 15%">Status</th>
                                <th style="width: 20%">Office Location</th>
                                <th style="width: 15%">Remarks</th>
                                <th style="width: 5%">Action</th>
                            </tr>
                        </thead>
                        <tbody id="printersTableBody"></tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-between btn-group-responsive">
                    <button type="button" class="btn btn-outline-primary" onclick="addPrinterRow()">
                        <i class="bi bi-plus-circle me-2"></i>Add Printer
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send-fill me-2"></i>Submit Form
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let index = 0;
        function addPrinterRow() {
            const tbody = document.getElementById('printersTableBody');
            
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><input type="text" class="form-control" name="printers[${index}][name]" placeholder="E.g., HP LaserJet" required></td>
                <td><input type="text" class="form-control" name="printers[${index}][model_number]" placeholder="E.g., M404dn" required></td>
                <td><input type="number" class="form-control" name="printers[${index}][quantity]" min="1" value="1" required></td>
                <td>
                    <select class="form-select" name="printers[${index}][status]" required>
                        <option value="">Select Status</option>
                        <option value="Working">Working</option>
                        <option value="Faulty">Faulty</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                        <option value="Retired">Retired</option>
                    </select>
                </td>
                <td>
                    <select class="form-select" name="printers[${index}][office_location]" required>
                        <option value="">Select Office</option>
                        <option value="Commissioner's office">Commissioner's office</option>
                        <option value="SA's office">SA's office</option>
                        <option value="PS' Office">PS' Office</option>
                        <option value="DG's Office">DG's Office</option>
                        <option value="GM's Office">GM's Office</option>
                        <option value="Admin Office">Admin Office</option>
                        <option value="Audit Office">Audit Office</option>
                        <option value="ICT Office">ICT Office</option>
                        <option value="PRO Office">PRO Office</option>
                        <option value="Legal Offcie">Legal Offcie</option>
                        <option value="Procurement Offcie">Procurement Offcie</option>
                        <option value="Planing Offcie">Planing Offcie</option>
                        <option value="Other Offcie">Other Offcie</option>
                    </select>

                </td>
                <td><input type="text" class="form-control" name="printers[${index}][remarks]" placeholder="Any additional notes"></td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-danger" onclick="this.closest('tr').remove()" title="Remove">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            `;
            tbody.appendChild(row);
            index++;
            
            // Add animation to highlight the new row
            row.style.opacity = '0';
            row.style.transition = 'opacity 0.5s ease';
            setTimeout(() => { row.style.opacity = '1'; }, 10);

            // Add event listener to quantity input
            const quantityInput = row.querySelector('input[name^="printers["][name$="[quantity]"]');
            quantityInput.addEventListener('change', updatePrinterCount);
            quantityInput.addEventListener('input', updatePrinterCount);
            
            updatePrinterCount(); // Update count after adding
        }
        
        // Add first row automatically
        document.addEventListener('DOMContentLoaded', function() {
            addPrinterRow();
        });

        document.querySelector('form').addEventListener('submit', function(e) {
            const hasPrinters = document.querySelector('input[name="has_printers"]:checked')?.value === '1';
            const printerCount = parseInt(document.getElementById('printer_count').value) || 0;
            
            if (hasPrinters) {
                // Calculate total quantity from printer rows
                let totalEntered = 0;
                const quantityInputs = document.querySelectorAll('input[name^="printers["][name$="[quantity]"]');
                
                quantityInputs.forEach(input => {
                    totalEntered += parseInt(input.value) || 0;
                });
                
                // Validate printer count matches total entered
                if (printerCount !== totalEntered) {
                    e.preventDefault();
                    alert(`Error: You entered ${totalEntered} printers in total, but specified ${printerCount} as the total count. Please make these numbers match.`);
                    return false;
                }
                
                // Validate at least one printer is added
                if (quantityInputs.length === 0) {
                    e.preventDefault();
                    alert('Error: Please add at least one printer since you indicated your organization has printers.');
                    return false;
                }
            }
            
            return true;
        });
    </script>
</body>
</html>