<div class="text-white text-lg w-full">

    <div class="text-black bg-white">
        {{ $perPage }}
        <select name="perPage" id="perPage" wire:model.live="perPage">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
        </select></div>


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


