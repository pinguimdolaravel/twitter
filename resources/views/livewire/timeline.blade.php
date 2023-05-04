<div class="text-white text-lg w-full">
    @foreach($this->tweets as $tweet)
        <x-tweet :tweet="$tweet" />
    @endforeach

    <div class="bg-blue-400 h-10 w-10" x-data="{
            infinityScroll() {
                const observer = new IntersectionObserver((items) => {
                    items.forEach((item) => {
                        if(item.isIntersecting) {
                        console.log(item)
                            @this.loadMore()
                        }
                    })
                }, {
                    threshold: 0.5, // 0 ... 1
                    rootMargin: '100px'
                })
                observer.observe(this.$el)
            }
        }" x-init="infinityScroll()">

    </div>
</div>


