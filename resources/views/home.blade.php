@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content')

<div class="max-w-screen-md mx-auto mt-4" x-data="{images: Alpine.store.images, current: 0, last: null, update(val) {this.last = this.current; this.current = val;}}" x-init="() =&gt; {$watch('current', (val) =&gt; {if(val &lt; -1) update(images.length + val); else if(val &gt; images.length) update(val - images.length);});}">
    <div class="relative overflow-x-hidden rounded shadow-2xl" style="padding-top: 62.5%">
      <div class="absolute inset-0 flex bg-green-100" :style="`transform: translateX(${(current + 1) * -100}%)`" :class="{ 'transition-transform': !(last &gt;= images.length || last &lt; 0) }" @transitionend="if (current === -1) update(images.length - 1); else if (current === images.length) update(0)">
        <template x-for="image in [images[images.length -1], ...images, images[0]]" :key="image"><img class="flex-shrink-0 object-cover object-center w-full h-full" :src="image"/></template>
      </div>
      <div class="absolute top-0 bottom-0 left-0 flex items-center" x-show="images.length &gt; 1">
        <button class="px-2 py-2 text-4xl bg-gray-100 rounded-r-lg opacity-25 hover:opacity-75 focus:outline-none focus:ring" @click="update(current - 1)">‹</button>
      </div>
      <div class="absolute top-0 bottom-0 right-0 flex items-center" x-show="images.length &gt; 1">
        <button class="px-2 py-2 text-4xl bg-gray-100 rounded-l-lg opacity-25 hover:opacity-75 focus:outline-none focus:ring" @click="update(current + 1)">›</button>
      </div>
    </div>
    <div class="text-center text-gray-400" x-text="`Total Images: ${images.length}, Current Image: ${current}`"></div>
  </div>
  <script>
    Alpine.store = {
  images: [
    "https://images.unsplash.com/photo-1444212477490-ca407925329e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80",
    "https://images.unsplash.com/photo-1504595403659-9088ce801e29?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
    "https://images.unsplash.com/photo-1518378188025-22bd89516ee2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80",
    "https://images.unsplash.com/photo-1519150268069-c094cfc0b3c8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1378&q=80"
  ]
};
</script>
@endsection

