<template>
	<div class="bg-blue-100 h-screen w-screen flex items-center">
		<div class="w-10/12 mx-auto">
			<div class="w-full md:w-1/3 mx-auto flex-col items-center justify-center">
				<div>
					<img src="/img/LOGO_NUBE_REPOSTERIA.png" class="w-full h-auto" alt="">
				</div>
				<div class="mt-7 text-center">
					<h3 class="text-primary text-lg md:text-2xl">
						Síguenos en:
						<a href="#" class="underline">Facebook</a> | <a href="#" class="underline">Instagram</a>
					</h3>
					<p class="text-primary text-opacity-50 font-bold text-sm mt-4">
						{{year}}, Nube Repostería, Derechos Reservados.
					</p>
				</div>

			</div>
		</div>
	</div>
</template>

<script>
export default {

  name: 'Index',
  props: ['year'],
  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
	
</style>