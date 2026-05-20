<form>
    <div class="mb-4">
        <label class="block font-semibold text-gray-900 mb-2">Customer</label>
        <div style="position: relative;">
            <input type="hidden" name="customer" class="custom-dropdown-value" value="">
            <div class="custom-dropdown-trigger" data-placeholder="Select customer" onclick="toggleDropdown(this)" style="background-color: #f3f4f6; border: none; border-radius: 12px; padding: 12px 16px; width: 100%; outline: none; cursor: pointer; user-select: none; color: #6b7280; min-height: 48px;">
                Select customer
            </div>
            <svg style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none; width: 20px; height: 20px; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
            <div class="custom-dropdown-options" style="display: none; position: fixed; background: white; border: 1px solid #e5e7eb; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); z-index: 99999; max-height: 200px; overflow-y: auto;">
                <div class="custom-dropdown-option" onclick="selectOption(this, '1', 'Alice Johnson')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Alice Johnson</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '2', 'Bob Smith')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Bob Smith</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '3', 'Carol White')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Carol White</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '4', 'David Brown')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">David Brown</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '5', 'Eve Davis')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Eve Davis</div>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <label class="block font-semibold text-gray-900 mb-2">Service</label>
        <div style="position: relative;">
            <input type="hidden" name="service" class="custom-dropdown-value" value="">
            <div class="custom-dropdown-trigger" data-placeholder="Select service" onclick="toggleDropdown(this)" style="background-color: #f3f4f6; border: none; border-radius: 12px; padding: 12px 16px; width: 100%; outline: none; cursor: pointer; user-select: none; color: #6b7280; min-height: 48px;">
                Select service
            </div>
            <svg style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none; width: 20px; height: 20px; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
            <div class="custom-dropdown-options" style="display: none; position: fixed; background: white; border: 1px solid #e5e7eb; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); z-index: 99999; max-height: 200px; overflow-y: auto;">
                <div class="custom-dropdown-option" onclick="selectOption(this, '1', 'Service A')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Service A</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '2', 'Service B')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Service B</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '3', 'Service C')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Service C</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '4', 'Service D')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Service D</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, '5', 'Service E')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Service E</div>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <label class="block font-semibold text-gray-900 mb-2">Start Date</label>
        <div style="position: relative;">
            <input type="text" id="start_date" name="start_date" style="background-color: #f3f4f6; border: none; border-radius: 12px; padding: 12px 16px; width: 100%; outline: none;" placeholder="Select start date" readonly>
            <span class="iconify" data-icon="ic:baseline-calendar-today" style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 20px; color: #6b7280;"></span>
        </div>
    </div>
    <div class="mb-4">
        <label class="block font-semibold text-gray-900 mb-2">End Date</label>
        <div style="position: relative;">
            <input type="text" id="end_date" name="end_date" style="background-color: #f3f4f6; border: none; border-radius: 12px; padding: 12px 16px; width: 100%; outline: none;" placeholder="Select end date" readonly>
            <span class="iconify" data-icon="ic:baseline-calendar-today" style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none; font-size: 20px; color: #6b7280;"></span>
        </div>
    </div>
    <div class="mb-6">
        <label class="block font-semibold text-gray-900 mb-2">Status</label>
        <div style="position: relative;">
            <input type="hidden" name="status" class="custom-dropdown-value" value="">
            <div class="custom-dropdown-trigger" data-placeholder="Select Status" onclick="toggleDropdown(this)" style="background-color: #f3f4f6; border: none; border-radius: 12px; padding: 12px 16px; width: 100%; outline: none; cursor: pointer; user-select: none; color: #6b7280; min-height: 48px;">
                Select Status
            </div>
            <svg style="position: absolute; right: 16px; top: 50%; transform: translateY(-50%); pointer-events: none; width: 20px; height: 20px; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
            <div class="custom-dropdown-options" style="display: none; position: fixed; background: white; border: 1px solid #e5e7eb; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); z-index: 99999; max-height: 200px; overflow-y: auto;">
                <div class="custom-dropdown-option" onclick="selectOption(this, 'active', 'Active')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Active</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, 'trial', 'Trial')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Trial</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, 'isolir', 'Isolir')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Isolir</div>
                <div class="custom-dropdown-option" onclick="selectOption(this, 'dismantle', 'Dismantle')" onmouseenter="this.style.backgroundColor='#f3f4f6'" onmouseleave="this.style.backgroundColor='white'" style="padding: 12px 16px; cursor: pointer;">Dismantle</div>
            </div>
        </div>
    </div>
    <div style="display: flex; align-items: center; justify-content: flex-end; gap: 12px;">
        <button type="button" data-bs-dismiss="modal" style="padding: 12px 24px; border: 1px solid #d1d5db; border-radius: 12px; background: white; color: #111827;">
            Cancel
        </button>
        <button type="button" onclick="validateAddSubscription(this)" style="padding: 12px 24px; border: none; border-radius: 12px; background-color: #394149; color: white;">
            Submit
        </button>
    </div>
</form>
