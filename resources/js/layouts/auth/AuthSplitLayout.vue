<script setup lang="ts">
import {
    IconCalendar,
    IconClock,
    IconHash,
    IconPhoto,
    IconUsers,
    IconVideo,
} from '@tabler/icons-vue';
import { trans } from 'laravel-vue-i18n';
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

defineProps<{
    title?: string;
    description?: string;
}>();

const slideKeys = ['calendar', 'scheduling', 'media', 'video', 'team', 'signatures'] as const;

const slideIcons = {
    calendar: IconCalendar,
    scheduling: IconClock,
    media: IconPhoto,
    video: IconVideo,
    team: IconUsers,
    signatures: IconHash,
};

const slides = computed(() =>
    slideKeys.map((key) => ({
        icon: slideIcons[key],
        title: trans(`auth.slides.${key}.title`),
        description: trans(`auth.slides.${key}.description`),
    })),
);

const activeIndex = ref(0);
const isPaused = ref(false);
let intervalId: ReturnType<typeof setInterval> | null = null;

const activeSlide = computed(() => slides.value[activeIndex.value]);

const goTo = (index: number) => {
    activeIndex.value = index;
    restartInterval();
};

const startInterval = () => {
    intervalId = setInterval(() => {
        if (!isPaused.value) {
            activeIndex.value = (activeIndex.value + 1) % slides.value.length;
        }
    }, 4000);
};

const restartInterval = () => {
    if (intervalId) {
        clearInterval(intervalId);
    }
    startInterval();
};

onMounted(() => {
    startInterval();
});

onBeforeUnmount(() => {
    if (intervalId) {
        clearInterval(intervalId);
    }
});

const platforms = [
    { name: 'LinkedIn', icon: '/images/accounts/linkedin.png' },
    { name: 'X', icon: '/images/accounts/x.png' },
    { name: 'Instagram', icon: '/images/accounts/instagram.png' },
    { name: 'Facebook', icon: '/images/accounts/facebook.png' },
    { name: 'TikTok', icon: '/images/accounts/tiktok.png' },
    { name: 'YouTube', icon: '/images/accounts/youtube.png' },
    { name: 'Threads', icon: '/images/accounts/threads.png' },
    { name: 'Pinterest', icon: '/images/accounts/pinterest.png' },
    { name: 'Bluesky', icon: '/images/accounts/bluesky.png' },
    { name: 'Mastodon', icon: '/images/accounts/mastodon.png' },
];
</script>

<template>
    <div class="grid min-h-svh grid-cols-1 bg-background lg:grid-cols-2">
        <div class="flex min-w-0 flex-col gap-4 p-6 md:p-10 lg:p-12">
            <div class="flex items-start">
                <img
                    src="/images/posta/wordmark.svg"
                    alt="Posta Studio"
                    class="h-8 w-auto"
                />
            </div>

            <div class="flex flex-1 items-center justify-center">
                <div class="w-full max-w-md">
                    <div class="flex flex-col gap-7">
                        <div class="flex flex-col items-center gap-2 text-center">
                            <h1
                                v-if="title"
                                class="text-3xl font-semibold tracking-[-0.035em] text-foreground"
                            >
                                {{ title }}
                            </h1>
                            <p
                                v-if="description"
                                class="max-w-sm text-sm leading-6 text-balance text-muted-foreground"
                            >
                                {{ description }}
                            </p>
                        </div>

                        <slot />
                    </div>
                </div>
            </div>
        </div>

        <div
            class="relative hidden overflow-hidden border-l border-border bg-muted/35 lg:sticky lg:top-0 lg:block lg:h-svh lg:self-start"
            @mouseenter="isPaused = true"
            @mouseleave="isPaused = false"
        >
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_70%_20%,rgba(91,92,226,0.10),transparent_36%)]" />

            <div class="relative flex h-full flex-col items-center justify-center px-12 xl:px-16">
                <div class="relative h-[280px] w-full max-w-md">
                    <template v-for="(slide, index) in slides" :key="index">
                        <Transition
                            enter-active-class="transition-[opacity,transform] duration-250 ease-out"
                            leave-active-class="transition-[opacity,transform] duration-200 ease-out"
                            enter-from-class="opacity-0 translate-y-3"
                            enter-to-class="opacity-100 translate-y-0"
                            leave-from-class="opacity-100 translate-y-0"
                            leave-to-class="opacity-0 -translate-y-2"
                        >
                            <div
                                v-if="activeIndex === index"
                                class="absolute inset-0 flex items-center justify-center"
                            >
                                <div
                                    class="w-full overflow-hidden rounded-2xl border border-border bg-card shadow-xl"
                                >
                                    <div
                                        class="flex items-center gap-3 border-b border-border bg-muted/50 px-4 py-2.5"
                                    >
                                        <div class="flex gap-1.5">
                                            <span class="size-2.5 rounded-full bg-rose-300" />
                                            <span class="size-2.5 rounded-full bg-amber-300" />
                                            <span class="size-2.5 rounded-full bg-emerald-300" />
                                        </div>
                                        <div
                                            class="ml-2 truncate text-[10px] font-semibold uppercase tracking-[0.14em] text-muted-foreground"
                                        >
                                            Posta Studio
                                        </div>
                                        <span
                                            class="ml-auto inline-flex items-center gap-1.5 rounded-full border border-border bg-card px-2 py-0.5 text-[10px] font-semibold uppercase tracking-[0.12em] text-foreground"
                                        >
                                            <span class="relative flex size-1.5">
                                                <span
                                                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400/70"
                                                />
                                                <span
                                                    class="relative inline-flex size-1.5 rounded-full bg-emerald-500"
                                                />
                                            </span>
                                            Live
                                        </span>
                                    </div>

                                    <div class="flex items-center justify-center bg-card py-9">
                                        <div
                                            class="flex size-20 items-center justify-center rounded-2xl border border-border bg-accent/80 shadow-sm"
                                        >
                                            <component
                                                :is="slide.icon"
                                                class="size-9 text-accent-foreground"
                                            />
                                        </div>
                                    </div>

                                    <div
                                        class="flex flex-wrap justify-center gap-2 border-t border-border bg-card px-4 py-3.5"
                                    >
                                        <img
                                            v-for="platform in platforms"
                                            :key="platform.name"
                                            :src="platform.icon"
                                            :alt="platform.name"
                                            class="size-7 rounded-full border border-border bg-card p-0.5 shadow-2xs"
                                        />
                                    </div>
                                </div>
                            </div>
                        </Transition>
                    </template>
                </div>

                <div class="mt-10 w-full max-w-md text-center">
                    <div class="relative h-[100px]">
                        <TransitionGroup
                            enter-active-class="transition-[opacity,transform] duration-250 ease-out"
                            leave-active-class="transition-opacity duration-180 ease-out"
                            enter-from-class="opacity-0 translate-y-2"
                            enter-to-class="opacity-100 translate-y-0"
                            leave-from-class="opacity-100"
                            leave-to-class="opacity-0"
                        >
                            <div :key="activeIndex" class="absolute inset-x-0 top-0">
                                <h3 class="text-2xl font-semibold tracking-[-0.025em] text-foreground">
                                    {{ activeSlide.title }}
                                </h3>
                                <p
                                    class="mx-auto mt-2 max-w-sm text-sm leading-6 text-muted-foreground"
                                >
                                    {{ activeSlide.description }}
                                </p>
                            </div>
                        </TransitionGroup>
                    </div>

                    <div class="flex items-center justify-center gap-2">
                        <button
                            v-for="(_, index) in slides"
                            :key="index"
                            class="group relative flex h-5 cursor-pointer items-center justify-center"
                            @click="goTo(index)"
                        >
                            <span
                                class="block h-1.5 rounded-full transition-[width,background-color] duration-200 ease-out"
                                :class="
                                    activeIndex === index
                                        ? 'w-6 bg-foreground'
                                        : 'w-1.5 bg-foreground/15 group-hover:bg-foreground/30'
                                "
                            />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
