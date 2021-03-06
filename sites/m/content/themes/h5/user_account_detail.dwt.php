<?php
/*
Name: 资金管理模板
Description: 资金管理页
Libraries: page_menu,page_header
*/
defined('IN_ECJIA') or header("HTTP/1.0 404 Not Found");exit('404 Not Found');
?>
	<!-- {extends file="ecjia-touch.dwt.php"} -->

	<!-- {block name="main-content"} -->
	<div class="ecjia-user ecjia-user-head">
		<ul class="ecjia-list list-short nmargin-t">
			<li>
				<a href="{url path='user/account/balance'}">
					<div class="img-wallet"></div>
					<span class="icon-name">{t domain="h5"}我的余额{/t}</span>
					<span class="icon-price icon-price-red">{$user.formated_user_money}</span>
					<i class="iconfont  icon-jiantou-right"></i>
				</a>
			</li>
			<li>
				<a href="{url path='user/bonus/init'}">
					<div class="img-bonus"></div>
					<span class="icon-name">{t domain="h5"}红包{/t}</span>
					<span class="icon-price icon-price-red">{$user.user_bonus_count}</span>
					<i class="iconfont  icon-jiantou-right"></i>
				</a>
			</li>
			<li>
				<a href="{url path='user/bonus/add'}">
					<div class="img-add-bonus"></div>
					<span class="icon-name">{t domain="h5"}添加红包{/t}</span>
					<i class="iconfont  icon-jiantou-right"></i>
				</a>
			</li>
			<li>
				<div class="img-integral"></div>
				<span class="icon-name">{$integral_name}</span>
				<span class="icon-price icon-price-red">{$user.user_points}</span>
			</li>
			<li>
				<a href="{url path='user/bonus/get_integral'}">
					<div class="img-getintegral"></div>
					<span class="icon-name">{t domain="h5"}赚{/t}{$integral_name}</span>
					<i class="iconfont  icon-jiantou-right"></i>
				</a>
			</li>
		</ul>
	</div>
	<!-- {/block} -->