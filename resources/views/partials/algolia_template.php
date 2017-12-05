<script id="search_suggestion_template" type="text/template">
	<div class="autocomplete-wrapper bg-white p-4 leading-normal border border-grey-lighter text-black w-full">
		{{#_highlightResult.h1}}
		<div class="h1 font-bold">
			{{{ _highlightResult.h1.value }}}
		</div>
		{{/_highlightResult.h1}}

		<div class="sub-section mt-2">
			{{#_highlightResult.h2}}
			<div class="h2 font-normal">
				<span class="hash text-teal font-light">#</span> {{{ _highlightResult.h2.value }}}
			</div>
			{{/_highlightResult.h2}}

			{{#_highlightResult.h3}}
			<div class="h3">
				> {{{ _highlightResult.h3.value }}}
			</div>
			{{/_highlightResult.h3}}

			{{#_highlightResult.h4}}
			<div class="h4">
				> {{{ _highlightResult.h4.value }}}
			</div>
			{{/_highlightResult.h4}}
		</div>

		{{#_highlightResult.content}}
		<div class="content mt-2 text-sm">
			{{{ _highlightResult.content.value }}}
		</div>
		{{/_highlightResult.content}}
	</div>
</script>

<script id="search_empty_template" type="text/template">
	<div class="autocomplete-wrapper empty">
		<div class="h2">We didn't find any result for "{{query}}". Sorry!</div>
	</div>
</script>

<script id="search_footer_template" type="text/template">
	<div class="footer block bg-white border border-grey-lighter border-t-0 text-right p-2">
		<a target="_blank" href="https://www.algolia.com/" class="text-sm no-underline text-grey">
			<div class="inline-block align-middle">powered by</div>
			<img class="inline-block h-4 align-middle" src="/img/algolia-logo.png">
		</a>
	</div>
</script>