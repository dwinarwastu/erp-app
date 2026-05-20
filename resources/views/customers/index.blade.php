@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div></div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#addDataModal" class="inline-flex items-center gap-2 bg-primary text-white rounded-xl px-6 py-4">
            <span class="iconify" data-icon="ic:baseline-add" style="font-size: 20px;"></span>
            Add Data
        </button>
    </div>

    <div class="border border-gray-200 rounded-lg bg-white" style="overflow: visible;">
    <table class="w-full text-left" style="overflow: visible;">
        <thead>
            <tr class="border-b border-gray-200">
                <th class="px-4 py-4 font-semibold text-gray-900">Customer ID</th>
                <th class="px-4 py-4 font-semibold text-gray-900">Customer Name</th>
                <th class="px-4 py-4 font-semibold text-gray-900">Email</th>
                <th class="px-4 py-4 font-semibold text-gray-900">Address</th>
                <th class="px-4 py-4 font-semibold text-gray-900">Status</th>
                <th class="px-4 py-4 font-semibold text-gray-900 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $customers = [
                    ['id' => '021423457', 'name' => 'Alice Johnson', 'email' => 'alice@gmail.com', 'address' => 'Swan Street', 'status' => 'Active'],
                    ['id' => '021423458', 'name' => 'Bob Smith', 'email' => 'bob@gmail.com', 'address' => 'Maple Avenue', 'status' => 'Inactive'],
                    ['id' => '021423459', 'name' => 'Carol White', 'email' => 'carol@gmail.com', 'address' => 'Pine Road', 'status' => 'Active'],
                    ['id' => '021423460', 'name' => 'David Brown', 'email' => 'david@gmail.com', 'address' => 'Oak Lane', 'status' => 'Active'],
                    ['id' => '021423461', 'name' => 'Eve Davis', 'email' => 'eve@gmail.com', 'address' => 'Elm Drive', 'status' => 'Inactive'],
                    ['id' => '021423462', 'name' => 'Frank Miller', 'email' => 'frank@gmail.com', 'address' => 'Cedar Court', 'status' => 'Active'],
                ];
            @endphp
            @foreach ($customers as $customer)
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-4 text-gray-900">{{ $customer['id'] }}</td>
                    <td class="px-4 py-4 text-gray-900">{{ $customer['name'] }}</td>
                    <td class="px-4 py-4 text-gray-900">{{ $customer['email'] }}</td>
                    <td class="px-4 py-4 text-gray-900">{{ $customer['address'] }}</td>
                    <td class="px-4 py-4">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full font-medium {{ $customer['status'] === 'Active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $customer['status'] }}
                        </span>
                    </td>
                    <td class="px-4 py-4 text-center" style="position: relative; overflow: visible;">
                        <button class="flex justify-center w-full text-gray-500 hover:text-gray-700 action-toggle" data-status="{{ $customer['status'] }}">
                            <span class="iconify" data-icon="ic:baseline-menu" style="font-size: 24px;"></span>
                        </button>
                        <div class="action-dropdown" data-id="{{ $customer['id'] }}" data-name="{{ $customer['name'] }}" data-email="{{ $customer['email'] }}" data-address="{{ $customer['address'] }}" data-status="{{ $customer['status'] }}" style="display: none; position: absolute; right: 16px; top: 100%; background: white; border: 1px solid #e5e7eb; border-radius: 16px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -4px rgba(0,0,0,0.1); z-index: 9999; min-width: 200px; padding: 8px 0;">
                            <div style="display: flex; align-items: center; gap: 12px; padding: 12px 20px; cursor: pointer; font-weight: 600; color: #111827; white-space: nowrap;" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='transparent'">
                                <span class="iconify" data-icon="material-symbols:key" style="font-size: 22px;"></span>
                                <span>Active</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; padding: 12px 20px; cursor: pointer; font-weight: 600; color: #111827; white-space: nowrap;" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='transparent'">
                                <span class="iconify" data-icon="material-symbols:key-off" style="font-size: 22px;"></span>
                                <span>Deactivate</span>
                            </div>
                            <div onclick="openEditModal(this)" style="display: flex; align-items: center; gap: 12px; padding: 12px 20px; cursor: pointer; font-weight: 600; color: #111827; white-space: nowrap;" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='transparent'">
                                <span class="iconify" data-icon="boxicons:edit" style="font-size: 22px;"></span>
                                <span>Edit</span>
                            </div>
                            <div onclick="openDeleteModal(this)" style="display: flex; align-items: center; gap: 12px; padding: 12px 20px; cursor: pointer; font-weight: 600; color: #ef4444; white-space: nowrap;" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='transparent'">
                                <span class="iconify" data-icon="material-symbols:delete" style="font-size: 22px;"></span>
                                <span>Delete</span>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    @include('customers.create')
    @include('customers.edit')
    @include('customers.delete')
@endsection

@push('scripts')
<script>
function toggleDropdown(el) {
    const options = el.nextElementSibling.nextElementSibling;
    const isVisible = options.style.display === 'block';

    document.querySelectorAll('.custom-dropdown-options').forEach(o => o.style.display = 'none');

    if (!isVisible) {
        const triggerRect = el.getBoundingClientRect();
        const spaceBelow = window.innerHeight - triggerRect.bottom;

        options.style.position = 'fixed';
        options.style.width = triggerRect.width + 'px';
        options.style.left = triggerRect.left + 'px';
        options.style.zIndex = '99999';
        options.style.display = 'block';

        if (spaceBelow < 120) {
            options.style.top = 'auto';
            options.style.bottom = (window.innerHeight - triggerRect.top + 4) + 'px';
        } else {
            options.style.bottom = 'auto';
            options.style.top = (triggerRect.bottom + 4) + 'px';
        }
    }
}

function selectOption(el, value, label) {
    const wrapper = el.closest('[style*="position: relative"]');
    const trigger = wrapper.querySelector('.custom-dropdown-trigger');
    const input = wrapper.querySelector('.custom-dropdown-value');
    const options = wrapper.querySelector('.custom-dropdown-options');
    trigger.textContent = label;
    trigger.style.color = '#111827';
    input.value = value;
    options.style.display = 'none';
}

document.addEventListener('click', function(e) {
    if (!e.target.closest('.custom-dropdown-trigger')) {
        document.querySelectorAll('.custom-dropdown-options').forEach(el => {
            el.style.display = 'none';
        });
    }
    if (!e.target.closest('.action-toggle') && !e.target.closest('.action-dropdown')) {
        document.querySelectorAll('.action-dropdown').forEach(el => {
            el.style.display = 'none';
        });
    }
});

document.querySelectorAll('.action-toggle').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const dropdown = this.nextElementSibling;
        const isOpen = dropdown.style.display === 'block';

        document.querySelectorAll('.action-dropdown').forEach(el => { el.style.display = 'none'; });

        if (!isOpen) {
            const btnRect = this.getBoundingClientRect();
            const spaceBelow = window.innerHeight - btnRect.bottom;

            if (spaceBelow < 300) {
                dropdown.style.top = 'auto';
                dropdown.style.bottom = '100%';
            } else {
                dropdown.style.bottom = 'auto';
                dropdown.style.top = '100%';
            }

            dropdown.style.display = 'block';
        }
    });
});

document.getElementById('addDataModal').addEventListener('hidden.bs.modal', function() {
    const modal = this;
    modal.querySelectorAll('input[type="text"], input[type="email"]').forEach(el => { el.value = ''; });
    modal.querySelectorAll('.custom-dropdown-value').forEach(el => { el.value = ''; });
    modal.querySelectorAll('.custom-dropdown-trigger').forEach(el => {
        el.style.color = '#6b7280';
        const placeholder = el.getAttribute('data-placeholder');
        if (placeholder) el.textContent = placeholder;
    });
});

function openEditModal(el) {
    const dropdown = el.closest('.action-dropdown');
    document.getElementById('edit_customer_id').value = dropdown.dataset.id;
    document.getElementById('edit_customer_name').value = dropdown.dataset.name;
    document.getElementById('edit_customer_email').value = dropdown.dataset.email;
    document.getElementById('edit_customer_address').value = dropdown.dataset.address;
    const status = dropdown.dataset.status;
    const statusInput = document.getElementById('edit_customer_status');
    statusInput.value = status.toLowerCase();
    const trigger = statusInput.nextElementSibling;
    trigger.textContent = status;
    trigger.style.color = '#111827';
    dropdown.style.display = 'none';
    new bootstrap.Modal(document.getElementById('editDataModal')).show();
}

function openDeleteModal(el) {
    const dropdown = el.closest('.action-dropdown');
    document.getElementById('delete_customer_name').textContent = dropdown.dataset.name;
    dropdown.style.display = 'none';
    new bootstrap.Modal(document.getElementById('deleteDataModal')).show();
}

function clearErrors(modal) {
    modal.querySelectorAll('.field-error').forEach(el => el.remove());
    modal.querySelectorAll('[style*="border: 1px solid #ef4444"]').forEach(el => {
        el.style.border = 'none';
    });
    modal.querySelectorAll('.custom-dropdown-trigger[style*="border: 1px solid #ef4444"]').forEach(el => {
        el.style.border = 'none';
    });
}

function showFieldError(field, message) {
    const existing = field.parentElement.querySelector('.field-error');
    if (existing) existing.remove();
    const err = document.createElement('div');
    err.className = 'field-error';
    err.style.cssText = 'color: #ef4444; font-size: 13px; margin-top: 4px;';
    err.textContent = message;
    field.style.border = '1px solid #ef4444';
    field.parentElement.appendChild(err);
}

function attachInputListeners(modal) {
    modal.querySelectorAll('input[type="text"], input[type="email"]').forEach(el => {
        el.addEventListener('input', function() {
            this.style.border = 'none';
            const err = this.parentElement.querySelector('.field-error');
            if (err) err.remove();
        }, { once: true });
    });
}

function validateAddCustomer(btn) {
    const modal = btn.closest('.modal');
    const form = modal.querySelector('form');
    clearErrors(modal);
    let valid = true;

    const inputs = form.querySelectorAll('input[type="text"], input[type="email"]');
    const nameInput = inputs[1];
    const emailInput = inputs[2];
    const addressInput = inputs[3];
    const statusInput = form.querySelector('.custom-dropdown-value');
    const statusTrigger = form.querySelector('.custom-dropdown-trigger');

    if (!nameInput.value.trim()) { showFieldError(nameInput, 'Customer Name is required'); valid = false; }
    if (!emailInput.value.trim()) { showFieldError(emailInput, 'Email is required'); valid = false; }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) { showFieldError(emailInput, 'Please enter a valid email'); valid = false; }
    if (!addressInput.value.trim()) { showFieldError(addressInput, 'Address is required'); valid = false; }
    if (!statusInput.value) { showFieldError(statusTrigger, 'Status is required'); valid = false; }

    if (!valid) { attachInputListeners(modal); return; }
    showToast('Data added successfully', 'success');
    bootstrap.Modal.getInstance(modal).hide();
}

function validateEditCustomer(btn) {
    const modal = btn.closest('.modal');
    const form = modal.querySelector('form');
    clearErrors(modal);
    let valid = true;

    const nameInput = document.getElementById('edit_customer_name');
    const emailInput = document.getElementById('edit_customer_email');
    const addressInput = document.getElementById('edit_customer_address');
    const statusInput = document.getElementById('edit_customer_status');
    const statusTrigger = statusInput.nextElementSibling;

    if (!nameInput.value.trim()) { showFieldError(nameInput, 'Customer Name is required'); valid = false; }
    if (!emailInput.value.trim()) { showFieldError(emailInput, 'Email is required'); valid = false; }
    else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) { showFieldError(emailInput, 'Please enter a valid email'); valid = false; }
    if (!addressInput.value.trim()) { showFieldError(addressInput, 'Address is required'); valid = false; }
    if (!statusInput.value) { showFieldError(statusTrigger, 'Status is required'); valid = false; }

    if (!valid) { attachInputListeners(modal); return; }
    showToast('Data updated successfully', 'success');
    bootstrap.Modal.getInstance(modal).hide();
}
</script>
@endpush
