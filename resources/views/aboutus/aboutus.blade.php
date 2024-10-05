@extends('layouts.app')
@section('content')
<div class="py-12 bg-gray-100">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Phần giới thiệu -->
        <div class="mb-12 text-center">
            <h1 class="mb-4 text-4xl font-bold text-gray-900">Về Chúng Tôi</h1>
            <p class="text-xl text-gray-600">Chúng tôi là một công ty công nghệ tiên phong, luôn hướng đến tương
                lai.</p>
        </div>

        <!-- Phần sứ mệnh và tầm nhìn -->
        <div class="mb-12 overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="p-8">
                <h2 class="mb-4 text-2xl font-semibold text-gray-900">Sứ Mệnh & Tầm Nhìn</h2>
                <p class="mb-4 text-gray-600">Sứ mệnh của chúng tôi là mang đến những giải pháp công nghệ tiên tiến,
                    góp phần nâng cao chất lượng cuộc sống và thúc đẩy sự phát triển của xã hội.</p>
                <p class="text-gray-600">Chúng tôi hướng đến việc trở thành công ty công nghệ hàng đầu, được công
                    nhận về sự đổi mới và tác động tích cực đến cộng đồng.</p>
            </div>
        </div>

        <!-- Phần giá trị cốt lõi -->
        <div class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-center text-gray-900">Giá Trị Cốt Lõi</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="mb-2 text-xl font-semibold text-indigo-600">Đổi Mới</h3>
                    <p class="text-gray-600">Chúng tôi luôn tìm kiếm những ý tưởng mới và cách tiếp cận sáng tạo.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="mb-2 text-xl font-semibold text-indigo-600">Chất Lượng</h3>
                    <p class="text-gray-600">Chúng tôi cam kết mang đến sản phẩm và dịch vụ chất lượng cao nhất.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="mb-2 text-xl font-semibold text-indigo-600">Trách Nhiệm</h3>
                    <p class="text-gray-600">Chúng tôi hoạt động với tinh thần trách nhiệm cao đối với khách hàng,
                        đối tác và cộng đồng.</p>
                </div>
            </div>
        </div>

        <!-- Phần đội ngũ -->
        <div>
            <h2 class="mb-6 text-2xl font-semibold text-center text-gray-900">Đội Ngũ Của Chúng Tôi</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="p-6 text-center bg-white rounded-lg shadow-md">
                    <img src="/api/placeholder/150/150" alt="CEO" class="mx-auto mb-4 rounded-full">
                    <h3 class="mb-2 text-xl font-semibold">Nguyễn Văn A</h3>
                    <p class="text-gray-600">Giám đốc điều hành</p>
                </div>
                <div class="p-6 text-center bg-white rounded-lg shadow-md">
                    <img src="/api/placeholder/150/150" alt="CTO" class="mx-auto mb-4 rounded-full">
                    <h3 class="mb-2 text-xl font-semibold">Trần Thị B</h3>
                    <p class="text-gray-600">Giám đốc công nghệ</p>
                </div>
                <div class="p-6 text-center bg-white rounded-lg shadow-md">
                    <img src="/api/placeholder/150/150" alt="COO" class="mx-auto mb-4 rounded-full">
                    <h3 class="mb-2 text-xl font-semibold">Lê Văn C</h3>
                    <p class="text-gray-600">Giám đốc vận hành</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection