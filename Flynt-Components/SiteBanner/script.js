import { buildRefs } from '@/assets/scripts/helpers.js'

export default function (el) {
  const refs = buildRefs(el)

  init()

  return () => {
    // on onmount
  }

  function init () {
    console.log('init SiteBanner 👋🏻')
  }
}
