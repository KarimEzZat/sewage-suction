@extends('layouts.app')

@section('content')
    <div class="mb-3 mt-3 mt-lg-0">
        <a href="{{ route('questions.create') }}" class="primary-btn transition" data-text="اضافة تاج">
            <span>اضافة سؤال</span>
        </a>
    </div>
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <i class="fa fa-question fa-2x mr-3"></i>
            الاسئلة الشائعة
        </div>
        <div class="card-body">
            @if($faqs->count() > 0)
                <table class="table articles-table">
                    <thead>
                    <tr>
                        <th>السؤال</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{ Str::limit($question->questions, 50) }}</td>
                            <td>
                                <a href="{{ route('questions.edit', $question->id) }}" class="primary-btn transition"
                                   data-text="تعديل">
                                    <span>تعديل</span>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="primary-btn transition red" data-text="حذف">
                                        <span>حذف</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-danger d-flex align-items-center justify-content-center">
                    <i class="fa fa-frown-o fa-2x mr-3"></i>
                    لا يوجد اي أسئلة هنا
                </h3>
            @endif
        </div>
    </div>
@endsection
