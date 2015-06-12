<?php require('header.php'); ?>
	
	<section class="main-section">
		<div class="tidy-g">
			<div class="tidy-u-1-4">
				<div class="doc-capation">
					<div class="list-group">
						<a href="" id="doc-basic" class="btn">基础</a>
						<a href="" id="doc-grid" class="btn">栅格</a>
						<a href="" id="doc-form" class="btn">表单</a>
						<a href="" id="doc-input" class="btn">输入</a>
						<a href="" id="doc-table" class="btn">表格</a>
						<a href="" id="doc-menu" class="btn">菜单</a>
						<a href="" id="doc-pagnitaion" class="btn">分页</a>
						<a href="" id="doc-img" class="btn">图片</a>
						<a href="" id="doc-list" class="btn">列表</a>
						<a href="" id="doc-custom" class="btn">定制</a>
					</div>
				</div>
			</div>
			<div class="tidy-u-3-4">
				<div class="marketing noborder doc-detail">
					<div class="header">
						 <h1>基础入门</h1>
					</div>
					<div class="content">
						<h3 class="marketing-header">安装Tidy</h3>
						<p>安装Tidy只需要引入CSS文件</p>
						<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">link</spans></span> <span class="support attribute">rel</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">stylesheet</span><span class="string quote">"</span> <span class="support attribute">href</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">http://ivydom.com/tidy/0.1.0/tidy-min.css</span><span class="string quote">"</span><span class="support tag close">&gt;</span></code></pre>
						<h3 class="marketing-header">简单的响应式布局</h3>
						<p>在Tidy中使用响应式只需调用.tidy-g类作为外围div,然后使用.tidy-u-*-*即可,比如</p>
						<pre class="code code-wrap code-wrap-full" data-language="html"><code class="rainbow"><span class="support tag"><span class="support tag">&lt;</span><span class="support tag-name">div</span></span> <span class="support attribute">class</span><span class="support operator">=</span><span class="string quote">"</span><span class="string value">.tidy-g</span><span class="string quote">"</span><span class="support tag close">&gt;</span><br>&nbsp;&nbsp;<span class="support tag">&lt;</span>div <span class="support attribute">class</span>="<span class="string value">.tidy-u-1"</span><span class="support tag">&gt;</span>&lt;/div&gt;<br>&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script type="text/javascript">
		$(document).ready(function(){
			localStorage.currentDocIndex=1;
			$('.doc-capation .list-group a:nth-child('+localStorage.currentDocIndex+')').addClass('list-group-a-active');
			document.title="文档 - Tidy";
			$('.doc-capation .list-group a').click(function(){
				localStorage.currentDocIndex=$(this).index()+1;
				$('.list-group-a-active').removeClass('list-group-a-active');
				$(this).addClass('list-group-a-active');
				document.title=$(this).html()+' - 文档 - Tidy';
				$('.doc-detail').html('');
				var docToBeLoaded=$(this).attr('id').split('-');
				$('.doc-detail').load("doc/"+docToBeLoaded[1]+'.php');
				return false;
			});
		});
	</script>

<?php require('footer.php'); ?>