<script lang="ts" setup>
import type { ToasterProps } from "vue-sonner"
import { Toaster as Sonner } from "vue-sonner"

const props = defineProps<ToasterProps>()
</script>

<template>
  <Sonner
    v-bind="props"
    position="bottom-right"
    :style="{
      '--normal-bg': 'var(--card)',
      '--normal-text': 'var(--foreground)',
      '--normal-border': 'var(--border)',
      '--success-bg': '#f0fbf6',
      '--success-text': 'var(--foreground)',
      '--success-border': '#cfeee0',
      '--error-bg': '#fff4f4',
      '--error-text': 'var(--foreground)',
      '--error-border': '#f3d0d0',
      '--warning-bg': '#fff9ed',
      '--warning-text': 'var(--foreground)',
      '--warning-border': '#f4dfb3',
      '--info-bg': '#f5f5ff',
      '--info-text': 'var(--foreground)',
      '--info-border': '#ddddff',
    }"
  />
</template>

<style>
[data-sonner-toast] {
  border-width: 1px !important;
  border-radius: var(--radius-lg) !important;
  box-shadow: var(--shadow-md) !important;
  font-weight: 500;
}

[data-sonner-toast] [data-title] {
  font-weight: 600;
}

[data-sonner-toast][data-type="success"] [data-icon] {
  color: var(--success) !important;
}

[data-sonner-toast][data-type="error"] [data-icon] {
  color: var(--error) !important;
}

[data-sonner-toast][data-type="warning"] [data-icon] {
  color: var(--warning) !important;
}

[data-sonner-toast][data-type="info"] [data-icon] {
  color: var(--info) !important;
}

[data-sonner-toast] [data-button] {
  border: 1px solid var(--border) !important;
  box-shadow: none !important;
  font-weight: 600;
}
</style>
