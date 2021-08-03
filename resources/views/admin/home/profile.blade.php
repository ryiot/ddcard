@extends('layouts.admin')
@section('title', '个人资料')

@section('content')
  <div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
    <div class="py-4 px-5 lg:px-6 w-full bg-gray-50">
      <h3 class="flex items-center space-x-2">
        <span>个人资料</span>
      </h3>
    </div>
    <div class="p-5 lg:p-6 flex-grow w-full">
      <form action="{{ route('admin.profile.update') }}" method="post" class="space-y-6">
        <div hidden>
          @csrf
        </div>
        <div class="space-y-1 md:space-y-0 md:flex md:items-center">
          <label for="username" class="font-semibold md:w-1/5 flex-none md:mr-6 text-right">用户名</label>
          <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" class="block border border-gray-200 bg-gray-100 rounded px-3 py-2 leading-6 w-full md:w-2/5 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="请输入用户名" readonly />
        </div>
        <div class="space-y-1 md:space-y-0 md:flex md:items-center">
          <label for="name" class="font-semibold md:w-1/5 flex-none md:mr-6 text-right">昵称</label>
          <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="block border border-gray-200 rounded px-3 py-2 leading-6 w-full md:w-2/5 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="请输入昵称" />
        </div>
        <div class="space-y-1 md:space-y-0 md:flex md:items-center">
          <label for="password" class="font-semibold md:w-1/5 flex-none md:mr-6 text-right">密码</label>
          <input type="password" id="password" name="password" class="block border border-gray-200 rounded px-3 py-2 leading-6 w-full md:w-2/5 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="请输入密码" />
        </div>
        <div class="space-y-1 md:space-y-0 md:flex md:items-center">
          <label for="password_confirmation" class="font-semibold md:w-1/5 flex-none md:mr-6 text-right">确认密码</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="block border border-gray-200 rounded px-3 py-2 leading-6 w-full md:w-2/5 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" placeholder="请输入确认密码" />
        </div>
        <div class="md:w-4/5 ml-auto space-x-2">
          <button type="submit" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none md:ml-6 px-4 py-2 leading-5 text-sm rounded border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
            确认
          </button>
          <button type="button" x-on:click="window.history.back()" class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-4 py-2 leading-5 text-sm border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
            返回
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
