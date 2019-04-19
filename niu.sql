-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018-05-21 19:25:57
-- 服务器版本： 5.6.37-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niull11`
--

-- --------------------------------------------------------

--
-- 表的结构 `jz_ad`
--

CREATE TABLE IF NOT EXISTS `jz_ad` (
  `ad_id` bigint(20) NOT NULL COMMENT '广告id',
  `ad_name` varchar(255) NOT NULL COMMENT '广告名称',
  `ad_content` text COMMENT '广告内容',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_all_record`
--

CREATE TABLE IF NOT EXISTS `jz_all_record` (
  `id` int(11) NOT NULL COMMENT '商城用户注册登录表',
  `user_id` int(11) DEFAULT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '登录账号',
  `UG_type` varchar(60) DEFAULT '' COMMENT '奖金分类',
  `UG_integral` decimal(15,4) DEFAULT '0.0000' COMMENT '当前账户种子币余额',
  `number` varchar(255) DEFAULT '0.0000' COMMENT '当前帐户金币余额',
  `create_time` datetime DEFAULT NULL COMMENT '结算时间',
  `UG_allGet` decimal(20,0) DEFAULT NULL COMMENT '用户密码',
  `UG_balance` decimal(20,0) DEFAULT NULL COMMENT '当前账户余额',
  `UG_regIP` varchar(30) DEFAULT '',
  `wallet` varchar(100) DEFAULT '' COMMENT '分红类型',
  `notice` text COMMENT '金币获取说明',
  `UG_othraccount` varchar(60) DEFAULT NULL COMMENT '推荐帐号/开单帐号',
  `yb` decimal(15,4) DEFAULT '0.0000',
  `ybhe` decimal(15,4) DEFAULT NULL,
  `zsb` decimal(15,4) DEFAULT NULL,
  `zsbhe` decimal(15,4) DEFAULT NULL,
  `yb1` decimal(15,4) DEFAULT NULL,
  `zsb1` decimal(15,4) DEFAULT NULL,
  `varid` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_asset`
--

CREATE TABLE IF NOT EXISTS `jz_asset` (
  `aid` bigint(20) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户 id',
  `key` varchar(50) NOT NULL COMMENT '资源 key',
  `filename` varchar(50) DEFAULT NULL COMMENT '文件名',
  `filesize` int(11) DEFAULT NULL COMMENT '文件大小,单位Byte',
  `filepath` varchar(200) NOT NULL COMMENT '文件路径，相对于 upload 目录，可以为 url',
  `uploadtime` int(11) NOT NULL COMMENT '上传时间',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1：可用，0：删除，不可用',
  `meta` text COMMENT '其它详细信息，JSON格式',
  `suffix` varchar(50) DEFAULT NULL COMMENT '文件后缀名，不包括点',
  `download_times` int(11) NOT NULL DEFAULT '0' COMMENT '下载次数'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_auth_access`
--

CREATE TABLE IF NOT EXISTS `jz_auth_access` (
  `role_id` mediumint(8) unsigned NOT NULL COMMENT '角色',
  `rule_name` varchar(255) NOT NULL COMMENT '规则唯一英文标识,全小写',
  `type` varchar(30) DEFAULT NULL COMMENT '权限规则分类，请加应用前缀,如admin_'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_auth_access`
--

INSERT INTO `jz_auth_access` (`role_id`, `rule_name`, `type`) VALUES
(4, 'admin/content/default', 'admin_url'),
(4, 'comment/commentadmin/index', 'admin_url'),
(4, 'comment/commentadmin/delete', 'admin_url'),
(4, 'comment/commentadmin/check', 'admin_url'),
(4, 'portal/adminpost/index', 'admin_url'),
(4, 'portal/adminpost/listorders', 'admin_url'),
(4, 'portal/adminpost/top', 'admin_url'),
(4, 'portal/adminpost/recommend', 'admin_url'),
(4, 'portal/adminpost/move', 'admin_url'),
(4, 'portal/adminpost/check', 'admin_url'),
(4, 'portal/adminpost/delete', 'admin_url'),
(4, 'portal/adminpost/edit', 'admin_url'),
(4, 'portal/adminpost/edit_post', 'admin_url'),
(4, 'portal/adminpost/add', 'admin_url'),
(4, 'portal/adminpost/add_post', 'admin_url'),
(4, 'portal/adminpost/copy', 'admin_url'),
(4, 'portal/adminterm/index', 'admin_url'),
(4, 'portal/adminterm/listorders', 'admin_url'),
(4, 'portal/adminterm/delete', 'admin_url'),
(4, 'portal/adminterm/edit', 'admin_url'),
(4, 'portal/adminterm/edit_post', 'admin_url'),
(4, 'portal/adminterm/add', 'admin_url'),
(4, 'portal/adminterm/add_post', 'admin_url'),
(4, 'portal/adminpage/index', 'admin_url'),
(4, 'portal/adminpage/listorders', 'admin_url'),
(4, 'portal/adminpage/delete', 'admin_url'),
(4, 'portal/adminpage/edit', 'admin_url'),
(4, 'portal/adminpage/edit_post', 'admin_url'),
(4, 'portal/adminpage/add', 'admin_url'),
(4, 'portal/adminpage/add_post', 'admin_url'),
(4, 'admin/recycle/default', 'admin_url'),
(4, 'portal/adminpost/recyclebin', 'admin_url'),
(4, 'portal/adminpost/restore', 'admin_url'),
(4, 'portal/adminpost/clean', 'admin_url'),
(4, 'portal/adminpage/recyclebin', 'admin_url'),
(4, 'portal/adminpage/clean', 'admin_url'),
(4, 'portal/adminpage/restore', 'admin_url'),
(4, 'portal/adminpost/aid', 'admin_url'),
(4, 'admin/extension/default', 'admin_url'),
(4, 'admin/plugin/index', 'admin_url'),
(4, 'admin/plugin/toggle', 'admin_url'),
(4, 'admin/plugin/setting', 'admin_url'),
(4, 'admin/plugin/setting_post', 'admin_url'),
(4, 'admin/plugin/install', 'admin_url'),
(4, 'admin/plugin/uninstall', 'admin_url'),
(4, 'admin/plugin/update', 'admin_url'),
(4, 'admin/slide/default', 'admin_url'),
(4, 'admin/slide/index', 'admin_url'),
(4, 'admin/slide/listorders', 'admin_url'),
(4, 'admin/slide/toggle', 'admin_url'),
(4, 'admin/slide/delete', 'admin_url'),
(4, 'admin/slide/edit', 'admin_url'),
(4, 'admin/slide/edit_post', 'admin_url'),
(4, 'admin/slide/add', 'admin_url'),
(4, 'admin/slide/add_post', 'admin_url'),
(4, 'admin/slide/ban', 'admin_url'),
(4, 'admin/slide/cancelban', 'admin_url'),
(4, 'admin/slidecat/index', 'admin_url'),
(4, 'admin/slidecat/delete', 'admin_url'),
(4, 'admin/slidecat/edit', 'admin_url'),
(4, 'admin/slidecat/edit_post', 'admin_url'),
(4, 'admin/slidecat/add', 'admin_url'),
(4, 'admin/slidecat/add_post', 'admin_url'),
(4, 'admin/ad/index', 'admin_url'),
(4, 'admin/ad/toggle', 'admin_url'),
(4, 'admin/ad/delete', 'admin_url'),
(4, 'admin/ad/edit', 'admin_url'),
(4, 'admin/ad/edit_post', 'admin_url'),
(4, 'admin/ad/add', 'admin_url'),
(4, 'admin/ad/add_post', 'admin_url'),
(4, 'admin/link/index', 'admin_url'),
(4, 'admin/link/listorders', 'admin_url'),
(4, 'admin/link/toggle', 'admin_url'),
(4, 'admin/link/delete', 'admin_url'),
(4, 'admin/link/edit', 'admin_url'),
(4, 'admin/link/edit_post', 'admin_url'),
(4, 'admin/link/add', 'admin_url'),
(4, 'admin/link/add_post', 'admin_url'),
(4, 'api/oauthadmin/setting', 'admin_url'),
(4, 'api/oauthadmin/setting_post', 'admin_url'),
(3, 'portal/adminbonus/default', 'admin_url'),
(3, 'portal/adminbonus/bonusset', 'admin_url'),
(3, 'portal/adminbonus/extractset', 'admin_url'),
(3, 'portal/adminuser/default22', 'admin_url'),
(3, 'portal/adminuser/makepdb', 'admin_url'),
(3, 'portal/adminuser/pdb', 'admin_url'),
(5, 'api/guestbookadmin/yes', 'admin_url'),
(5, 'api/guestbookadmin/delete', 'admin_url'),
(5, 'api/guestbookadmin/index', 'admin_url'),
(5, 'api/guestbookadmin/default', 'admin_url'),
(5, 'portal/adminuser/turntable', 'admin_url'),
(5, 'portal/adminuser/editmoney', 'admin_url'),
(5, 'portal/adminuser/relationship', 'admin_url'),
(5, 'portal/adminuser/index', 'admin_url'),
(5, 'portal/adminuser/default', 'admin_url'),
(5, 'portal/adminpost/aid', 'admin_url'),
(5, 'portal/adminpage/restore', 'admin_url'),
(5, 'portal/adminpage/clean', 'admin_url'),
(5, 'portal/adminpage/recyclebin', 'admin_url'),
(5, 'portal/adminpost/clean', 'admin_url'),
(5, 'portal/adminpost/restore', 'admin_url'),
(5, 'admin/recycle/default', 'admin_url'),
(5, 'portal/adminpost/recyclebin', 'admin_url'),
(5, 'portal/adminpage/add_post', 'admin_url'),
(5, 'portal/adminpage/add', 'admin_url'),
(5, 'portal/adminpage/edit_post', 'admin_url'),
(5, 'portal/adminpage/edit', 'admin_url'),
(5, 'portal/adminpage/delete', 'admin_url'),
(5, 'portal/adminpage/listorders', 'admin_url'),
(5, 'portal/adminpage/index', 'admin_url'),
(5, 'portal/adminterm/add_post', 'admin_url'),
(5, 'portal/adminterm/add', 'admin_url'),
(5, 'portal/adminterm/edit_post', 'admin_url'),
(5, 'portal/adminterm/edit', 'admin_url'),
(5, 'portal/adminterm/delete', 'admin_url'),
(5, 'portal/adminterm/listorders', 'admin_url'),
(5, 'portal/adminterm/index', 'admin_url'),
(5, 'portal/adminpost/copy', 'admin_url'),
(5, 'portal/adminpost/add', 'admin_url'),
(5, 'portal/adminpost/add_post', 'admin_url'),
(5, 'portal/adminpost/edit_post', 'admin_url'),
(5, 'portal/adminpost/edit', 'admin_url'),
(5, 'portal/adminpost/delete', 'admin_url'),
(5, 'portal/adminpost/check', 'admin_url'),
(5, 'portal/adminpost/move', 'admin_url'),
(5, 'portal/adminpost/recommend', 'admin_url'),
(5, 'portal/adminpost/listorders', 'admin_url'),
(5, 'portal/adminpost/top', 'admin_url'),
(5, 'portal/adminpost/index', 'admin_url'),
(5, 'comment/commentadmin/check', 'admin_url'),
(5, 'comment/commentadmin/delete', 'admin_url'),
(5, 'comment/commentadmin/index', 'admin_url'),
(5, 'admin/content/default', 'admin_url');

-- --------------------------------------------------------

--
-- 表的结构 `jz_auth_rule`
--

CREATE TABLE IF NOT EXISTS `jz_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL COMMENT '规则id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '规则所属module',
  `type` varchar(30) NOT NULL DEFAULT '1' COMMENT '权限规则分类，请加应用前缀,如admin_',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识,全小写',
  `param` varchar(255) DEFAULT NULL COMMENT '额外url参数',
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '规则中文描述',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否有效(0:无效,1:有效)',
  `condition` varchar(300) NOT NULL DEFAULT '' COMMENT '规则附加条件'
) ENGINE=MyISAM AUTO_INCREMENT=226 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_auth_rule`
--

INSERT INTO `jz_auth_rule` (`id`, `module`, `type`, `name`, `param`, `title`, `status`, `condition`) VALUES
(1, 'Admin', 'admin_url', 'admin/content/default', '', '文章管理', 1, ''),
(2, 'Api', 'admin_url', 'api/guestbookadmin/index', '', '未处理留言', 1, ''),
(3, 'Api', 'admin_url', 'api/guestbookadmin/delete', '', '删除网站留言', 1, ''),
(4, 'Comment', 'admin_url', 'comment/commentadmin/index', '', '评论管理', 1, ''),
(5, 'Comment', 'admin_url', 'comment/commentadmin/delete', '', '删除评论', 1, ''),
(6, 'Comment', 'admin_url', 'comment/commentadmin/check', '', '评论审核', 1, ''),
(7, 'Portal', 'admin_url', 'portal/adminpost/index', '', '新闻公告', 1, ''),
(8, 'Portal', 'admin_url', 'portal/adminpost/listorders', '', '文章排序', 1, ''),
(9, 'Portal', 'admin_url', 'portal/adminpost/top', '', '文章置顶', 1, ''),
(10, 'Portal', 'admin_url', 'portal/adminpost/recommend', '', '文章推荐', 1, ''),
(11, 'Portal', 'admin_url', 'portal/adminpost/move', '', '批量移动', 1, ''),
(12, 'Portal', 'admin_url', 'portal/adminpost/check', '', '文章审核', 1, ''),
(13, 'Portal', 'admin_url', 'portal/adminpost/delete', '', '删除文章', 1, ''),
(14, 'Portal', 'admin_url', 'portal/adminpost/edit', '', '编辑文章', 1, ''),
(15, 'Portal', 'admin_url', 'portal/adminpost/edit_post', '', '提交编辑', 1, ''),
(16, 'Portal', 'admin_url', 'portal/adminpost/add', '', '添加文章', 1, ''),
(17, 'Portal', 'admin_url', 'portal/adminpost/add_post', '', '提交添加', 1, ''),
(18, 'Portal', 'admin_url', 'portal/adminterm/index', '', '分类管理', 1, ''),
(19, 'Portal', 'admin_url', 'portal/adminterm/listorders', '', '文章分类排序', 1, ''),
(20, 'Portal', 'admin_url', 'portal/adminterm/delete', '', '删除分类', 1, ''),
(21, 'Portal', 'admin_url', 'portal/adminterm/edit', '', '编辑分类', 1, ''),
(22, 'Portal', 'admin_url', 'portal/adminterm/edit_post', '', '提交编辑', 1, ''),
(23, 'Portal', 'admin_url', 'portal/adminterm/add', '', '添加分类', 1, ''),
(24, 'Portal', 'admin_url', 'portal/adminterm/add_post', '', '提交添加', 1, ''),
(25, 'Portal', 'admin_url', 'portal/adminpage/index', '', '页面管理', 1, ''),
(26, 'Portal', 'admin_url', 'portal/adminpage/listorders', '', '页面排序', 1, ''),
(27, 'Portal', 'admin_url', 'portal/adminpage/delete', '', '删除页面', 1, ''),
(28, 'Portal', 'admin_url', 'portal/adminpage/edit', '', '编辑页面', 1, ''),
(29, 'Portal', 'admin_url', 'portal/adminpage/edit_post', '', '提交编辑', 1, ''),
(30, 'Portal', 'admin_url', 'portal/adminpage/add', '', '添加页面', 1, ''),
(31, 'Portal', 'admin_url', 'portal/adminpage/add_post', '', '提交添加', 1, ''),
(32, 'Admin', 'admin_url', 'admin/recycle/default', '', '回收站', 1, ''),
(33, 'Portal', 'admin_url', 'portal/adminpost/recyclebin', '', '文章回收', 1, ''),
(34, 'Portal', 'admin_url', 'portal/adminpost/restore', '', '文章还原', 1, ''),
(35, 'Portal', 'admin_url', 'portal/adminpost/clean', '', '彻底删除', 1, ''),
(36, 'Portal', 'admin_url', 'portal/adminpage/recyclebin', '', '页面回收', 1, ''),
(37, 'Portal', 'admin_url', 'portal/adminpage/clean', '', '彻底删除', 1, ''),
(38, 'Portal', 'admin_url', 'portal/adminpage/restore', '', '页面还原', 1, ''),
(39, 'Admin', 'admin_url', 'admin/extension/default', '', '扩展工具', 1, ''),
(40, 'Admin', 'admin_url', 'admin/backup/default', '', '备份管理', 1, ''),
(41, 'Admin', 'admin_url', 'admin/backup/restore', '', '数据还原', 1, ''),
(42, 'Admin', 'admin_url', 'admin/backup/index', '', '数据备份', 1, ''),
(43, 'Admin', 'admin_url', 'admin/backup/index_post', '', '提交数据备份', 1, ''),
(44, 'Admin', 'admin_url', 'admin/backup/download', '', '下载备份', 1, ''),
(45, 'Admin', 'admin_url', 'admin/backup/del_backup', '', '删除备份', 1, ''),
(46, 'Admin', 'admin_url', 'admin/backup/import', '', '数据备份导入', 1, ''),
(47, 'Admin', 'admin_url', 'admin/plugin/index', '', '插件管理', 1, ''),
(48, 'Admin', 'admin_url', 'admin/plugin/toggle', '', '插件启用切换', 1, ''),
(49, 'Admin', 'admin_url', 'admin/plugin/setting', '', '插件设置', 1, ''),
(50, 'Admin', 'admin_url', 'admin/plugin/setting_post', '', '插件设置提交', 1, ''),
(51, 'Admin', 'admin_url', 'admin/plugin/install', '', '插件安装', 1, ''),
(52, 'Admin', 'admin_url', 'admin/plugin/uninstall', '', '插件卸载', 1, ''),
(53, 'Admin', 'admin_url', 'admin/slide/default', '', '幻灯片', 1, ''),
(54, 'Admin', 'admin_url', 'admin/slide/index', '', '幻灯片管理', 1, ''),
(55, 'Admin', 'admin_url', 'admin/slide/listorders', '', '幻灯片排序', 1, ''),
(56, 'Admin', 'admin_url', 'admin/slide/toggle', '', '幻灯片显示切换', 1, ''),
(57, 'Admin', 'admin_url', 'admin/slide/delete', '', '删除幻灯片', 1, ''),
(58, 'Admin', 'admin_url', 'admin/slide/edit', '', '编辑幻灯片', 1, ''),
(59, 'Admin', 'admin_url', 'admin/slide/edit_post', '', '提交编辑', 1, ''),
(60, 'Admin', 'admin_url', 'admin/slide/add', '', '添加幻灯片', 1, ''),
(61, 'Admin', 'admin_url', 'admin/slide/add_post', '', '提交添加', 1, ''),
(62, 'Admin', 'admin_url', 'admin/slidecat/index', '', '幻灯片分类', 1, ''),
(63, 'Admin', 'admin_url', 'admin/slidecat/delete', '', '删除分类', 1, ''),
(64, 'Admin', 'admin_url', 'admin/slidecat/edit', '', '编辑分类', 1, ''),
(65, 'Admin', 'admin_url', 'admin/slidecat/edit_post', '', '提交编辑', 1, ''),
(66, 'Admin', 'admin_url', 'admin/slidecat/add', '', '添加分类', 1, ''),
(67, 'Admin', 'admin_url', 'admin/slidecat/add_post', '', '提交添加', 1, ''),
(68, 'Admin', 'admin_url', 'admin/ad/index', '', '网站广告', 1, ''),
(69, 'Admin', 'admin_url', 'admin/ad/toggle', '', '广告显示切换', 1, ''),
(70, 'Admin', 'admin_url', 'admin/ad/delete', '', '删除广告', 1, ''),
(71, 'Admin', 'admin_url', 'admin/ad/edit', '', '编辑广告', 1, ''),
(72, 'Admin', 'admin_url', 'admin/ad/edit_post', '', '提交编辑', 1, ''),
(73, 'Admin', 'admin_url', 'admin/ad/add', '', '添加广告', 1, ''),
(74, 'Admin', 'admin_url', 'admin/ad/add_post', '', '提交添加', 1, ''),
(75, 'Admin', 'admin_url', 'admin/link/index', '', '友情链接', 1, ''),
(76, 'Admin', 'admin_url', 'admin/link/listorders', '', '友情链接排序', 1, ''),
(77, 'Admin', 'admin_url', 'admin/link/toggle', '', '友链显示切换', 1, ''),
(78, 'Admin', 'admin_url', 'admin/link/delete', '', '删除友情链接', 1, ''),
(79, 'Admin', 'admin_url', 'admin/link/edit', '', '编辑友情链接', 1, ''),
(80, 'Admin', 'admin_url', 'admin/link/edit_post', '', '提交编辑', 1, ''),
(81, 'Admin', 'admin_url', 'admin/link/add', '', '添加友情链接', 1, ''),
(82, 'Admin', 'admin_url', 'admin/link/add_post', '', '提交添加', 1, ''),
(83, 'Api', 'admin_url', 'api/oauthadmin/setting', '', '第三方登陆', 1, ''),
(84, 'Api', 'admin_url', 'api/oauthadmin/setting_post', '', '提交设置', 1, ''),
(85, 'Admin', 'admin_url', 'admin/menu/default', '', '菜单管理', 1, ''),
(86, 'Admin', 'admin_url', 'admin/navcat/default1', '', '前台菜单', 1, ''),
(87, 'Admin', 'admin_url', 'admin/nav/index', '', '菜单管理', 1, ''),
(88, 'Admin', 'admin_url', 'admin/nav/listorders', '', '前台导航排序', 1, ''),
(89, 'Admin', 'admin_url', 'admin/nav/delete', '', '删除菜单', 1, ''),
(90, 'Admin', 'admin_url', 'admin/nav/edit', '', '编辑菜单', 1, ''),
(91, 'Admin', 'admin_url', 'admin/nav/edit_post', '', '提交编辑', 1, ''),
(92, 'Admin', 'admin_url', 'admin/nav/add', '', '添加菜单', 1, ''),
(93, 'Admin', 'admin_url', 'admin/nav/add_post', '', '提交添加', 1, ''),
(94, 'Admin', 'admin_url', 'admin/navcat/index', '', '菜单分类', 1, ''),
(95, 'Admin', 'admin_url', 'admin/navcat/delete', '', '删除分类', 1, ''),
(96, 'Admin', 'admin_url', 'admin/navcat/edit', '', '编辑分类', 1, ''),
(97, 'Admin', 'admin_url', 'admin/navcat/edit_post', '', '提交编辑', 1, ''),
(98, 'Admin', 'admin_url', 'admin/navcat/add', '', '添加分类', 1, ''),
(99, 'Admin', 'admin_url', 'admin/navcat/add_post', '', '提交添加', 1, ''),
(100, 'Admin', 'admin_url', 'admin/menu/index', '', '后台菜单', 1, ''),
(101, 'Admin', 'admin_url', 'admin/menu/add', '', '添加菜单', 1, ''),
(102, 'Admin', 'admin_url', 'admin/menu/add_post', '', '提交添加', 1, ''),
(103, 'Admin', 'admin_url', 'admin/menu/listorders', '', '后台菜单排序', 1, ''),
(104, 'Admin', 'admin_url', 'admin/menu/export_menu', '', '菜单备份', 1, ''),
(105, 'Admin', 'admin_url', 'admin/menu/edit', '', '编辑菜单', 1, ''),
(106, 'Admin', 'admin_url', 'admin/menu/edit_post', '', '提交编辑', 1, ''),
(107, 'Admin', 'admin_url', 'admin/menu/delete', '', '删除菜单', 1, ''),
(108, 'Admin', 'admin_url', 'admin/menu/lists', '', '所有菜单', 1, ''),
(109, 'Admin', 'admin_url', 'admin/setting/default', '', '设置', 1, ''),
(110, 'Admin', 'admin_url', 'admin/setting/userdefault', '', '个人信息', 1, ''),
(111, 'Admin', 'admin_url', 'admin/user/userinfo', '', '修改信息', 1, ''),
(112, 'Admin', 'admin_url', 'admin/user/userinfo_post', '', '修改信息提交', 1, ''),
(113, 'Admin', 'admin_url', 'admin/setting/password', '', '修改密码', 1, ''),
(114, 'Admin', 'admin_url', 'admin/setting/password_post', '', '提交修改', 1, ''),
(115, 'Admin', 'admin_url', 'admin/setting/site', '', '网站信息', 1, ''),
(116, 'Admin', 'admin_url', 'admin/setting/site_post', '', '提交修改', 1, ''),
(117, 'Admin', 'admin_url', 'admin/route/index', '', '路由列表', 1, ''),
(118, 'Admin', 'admin_url', 'admin/route/add', '', '路由添加', 1, ''),
(119, 'Admin', 'admin_url', 'admin/route/add_post', '', '路由添加提交', 1, ''),
(120, 'Admin', 'admin_url', 'admin/route/edit', '', '路由编辑', 1, ''),
(121, 'Admin', 'admin_url', 'admin/route/edit_post', '', '路由编辑提交', 1, ''),
(122, 'Admin', 'admin_url', 'admin/route/delete', '', '路由删除', 1, ''),
(123, 'Admin', 'admin_url', 'admin/route/ban', '', '路由禁止', 1, ''),
(124, 'Admin', 'admin_url', 'admin/route/open', '', '路由启用', 1, ''),
(125, 'Admin', 'admin_url', 'admin/route/listorders', '', '路由排序', 1, ''),
(126, 'Admin', 'admin_url', 'admin/mailer/default', '', '邮箱配置', 1, ''),
(127, 'Admin', 'admin_url', 'admin/mailer/index', '', 'SMTP配置', 1, ''),
(128, 'Admin', 'admin_url', 'admin/mailer/index_post', '', '提交配置', 1, ''),
(129, 'Admin', 'admin_url', 'admin/mailer/active', '', '注册邮件模板', 1, ''),
(130, 'Admin', 'admin_url', 'admin/mailer/active_post', '', '提交模板', 1, ''),
(131, 'Admin', 'admin_url', 'admin/setting/clearcache', '', '清除缓存', 1, ''),
(132, 'User', 'admin_url', 'user/indexadmin/default', '', '用户管理', 1, ''),
(133, 'User', 'admin_url', 'user/indexadmin/default1', '', '用户组', 1, ''),
(134, 'User', 'admin_url', 'user/indexadmin/index', '', '本站用户', 1, ''),
(135, 'User', 'admin_url', 'user/indexadmin/ban', '', '拉黑会员', 1, ''),
(136, 'User', 'admin_url', 'user/indexadmin/cancelban', '', '启用会员', 1, ''),
(137, 'User', 'admin_url', 'user/oauthadmin/index', '', '第三方用户', 1, ''),
(138, 'User', 'admin_url', 'user/oauthadmin/delete', '', '第三方用户解绑', 1, ''),
(139, 'User', 'admin_url', 'user/indexadmin/default3', '', '管理组', 1, ''),
(140, 'Admin', 'admin_url', 'admin/rbac/index', '', '角色管理', 1, ''),
(141, 'Admin', 'admin_url', 'admin/rbac/member', '', '成员管理', 1, ''),
(142, 'Admin', 'admin_url', 'admin/rbac/authorize', '', '权限设置', 1, ''),
(143, 'Admin', 'admin_url', 'admin/rbac/authorize_post', '', '提交设置', 1, ''),
(144, 'Admin', 'admin_url', 'admin/rbac/roleedit', '', '编辑角色', 1, ''),
(145, 'Admin', 'admin_url', 'admin/rbac/roleedit_post', '', '提交编辑', 1, ''),
(146, 'Admin', 'admin_url', 'admin/rbac/roledelete', '', '删除角色', 1, ''),
(147, 'Admin', 'admin_url', 'admin/rbac/roleadd', '', '添加角色', 1, ''),
(148, 'Admin', 'admin_url', 'admin/rbac/roleadd_post', '', '提交添加', 1, ''),
(149, 'Admin', 'admin_url', 'admin/user/index', '', '管理员', 1, ''),
(150, 'Admin', 'admin_url', 'admin/user/delete', '', '删除管理员', 1, ''),
(151, 'Admin', 'admin_url', 'admin/user/edit', '', '管理员编辑', 1, ''),
(152, 'Admin', 'admin_url', 'admin/user/edit_post', '', '编辑提交', 1, ''),
(153, 'Admin', 'admin_url', 'admin/user/add', '', '管理员添加', 1, ''),
(154, 'Admin', 'admin_url', 'admin/user/add_post', '', '添加提交', 1, ''),
(155, 'Admin', 'admin_url', 'admin/plugin/update', '', '插件更新', 1, ''),
(156, 'Admin', 'admin_url', 'admin/storage/index', '', '文件存储', 1, ''),
(157, 'Admin', 'admin_url', 'admin/storage/setting_post', '', '文件存储设置提交', 1, ''),
(158, 'Admin', 'admin_url', 'admin/slide/ban', '', '禁用幻灯片', 1, ''),
(159, 'Admin', 'admin_url', 'admin/slide/cancelban', '', '启用幻灯片', 1, ''),
(160, 'Admin', 'admin_url', 'admin/user/ban', '', '禁用管理员', 1, ''),
(161, 'Admin', 'admin_url', 'admin/user/cancelban', '', '启用管理员', 1, ''),
(162, 'Demo', 'admin_url', 'demo/adminindex/index', '', '', 1, ''),
(163, 'Demo', 'admin_url', 'demo/adminindex/last', '', '', 1, ''),
(166, 'Admin', 'admin_url', 'admin/mailer/test', '', '测试邮件', 1, ''),
(167, 'Admin', 'admin_url', 'admin/setting/upload', '', '上传设置', 1, ''),
(168, 'Admin', 'admin_url', 'admin/setting/upload_post', '', '上传设置提交', 1, ''),
(169, 'Portal', 'admin_url', 'portal/adminpost/copy', '', '文章批量复制', 1, ''),
(170, 'Admin', 'admin_url', 'admin/menu/backup_menu', '', '备份菜单', 1, ''),
(171, 'Admin', 'admin_url', 'admin/menu/export_menu_lang', '', '导出后台菜单多语言包', 1, ''),
(172, 'Admin', 'admin_url', 'admin/menu/restore_menu', '', '还原菜单', 1, ''),
(173, 'Admin', 'admin_url', 'admin/menu/getactions', '', '导入新菜单', 1, ''),
(174, 'Portal', 'admin_url', 'portal/adminpost/aid', NULL, '援助公告', 1, ''),
(175, 'Api', 'admin_url', 'api/guestbookadmin/default', NULL, '留言管理', 1, ''),
(176, 'Api', 'admin_url', 'api/guestbookadmin/yes', NULL, '已处理留言', 1, ''),
(177, 'Portal', 'admin_url', 'portal/adminbonus/default', NULL, '系统设置', 1, ''),
(178, 'Portal', 'admin_url', 'portal/adminbonus/bonusset', NULL, '变量设置', 1, ''),
(179, 'Portal', 'admin_url', 'portal/adminbonus/extractset', NULL, '提现设置', 1, ''),
(180, 'Portal', 'admin_url', 'portal/adminorder/default', NULL, '匹配系统', 1, ''),
(181, 'Portal', 'admin_url', 'portal/adminorder/providehelp', NULL, '提供帮助', 1, ''),
(182, 'Portal', 'admin_url', 'portal/adminorder/gethelp', NULL, '接受帮助', 1, ''),
(183, 'Portal', 'admin_url', 'portal/adminorder/providesplit', NULL, '提供拆分', 1, ''),
(184, 'Portal', 'admin_url', 'portal/adminorder/getsplit', NULL, '接受拆分', 1, ''),
(185, 'Portal', 'admin_url', 'portal/adminorder/trading', NULL, '交易中的订单', 1, ''),
(186, 'Portal', 'admin_url', 'portal/adminorder/tradesuccess', NULL, '交易完成的订单', 1, ''),
(187, 'Portal', 'admin_url', 'portal/adminorder/timeoutpay', NULL, '超时未打款', 1, ''),
(188, 'Portal', 'admin_url', 'portal/adminorder/timeoutgathering', NULL, '超时未收款', 1, ''),
(189, 'Portal', 'admin_url', 'portal/adminorder/complainorder', NULL, '投诉订单管理', 1, ''),
(190, 'Portal', 'admin_url', 'portal/adminuser/code', NULL, '加时卡管理', 1, ''),
(191, 'Portal', 'admin_url', 'portal/adminuser/makeactivationcode', NULL, '生成加时卡', 1, ''),
(192, 'Portal', 'admin_url', 'portal/adminuser/activationcode', NULL, '加时卡列表', 1, ''),
(193, 'Portal', 'admin_url', 'portal/adminuser/default', NULL, '会员管理', 1, ''),
(194, 'Portal', 'admin_url', 'portal/adminuser/default333', NULL, '会员管理22', 1, ''),
(195, 'Portal', 'admin_url', 'portal/adminuser/index', NULL, '所有会员', 1, ''),
(196, 'Portal', 'admin_url', 'portal/adminuser/editmoney', NULL, '房卡操作', 1, ''),
(197, 'Portal', 'admin_url', 'portal/adminuser/relationship', NULL, '会员关系网', 1, ''),
(198, 'Portal', 'admin_url', 'portal/adminuser/default22', NULL, '加时卡管理', 1, ''),
(199, 'Portal', 'admin_url', 'portal/adminuser/turntable', NULL, '幸运大转盘', 1, ''),
(200, 'Portal', 'admin_url', 'portal/adminplan/index', NULL, '计划管理', 1, ''),
(201, 'Portal', 'admin_url', 'portal/adminorder/index', NULL, '计划列表', 1, ''),
(202, 'Protal', 'admin_url', 'protal/adminorder/addplan', NULL, '添加计划', 1, ''),
(203, 'Portal', 'admin_url', 'portal/adminorder/dd', NULL, '计划管理', 1, ''),
(204, 'Portal', 'admin_url', 'portal/adminorder/defaultd', NULL, '计划管理', 1, ''),
(205, 'Controller', 'admin_url', 'controller/adminorder/index', NULL, 'Portal', 1, ''),
(206, 'Portal', 'admin_url', 'portal/adminorder/addplan', NULL, '添加计划', 1, ''),
(207, 'Portal', 'admin_url', 'portal/adminorder/addoption', NULL, '选项管理', 1, ''),
(208, 'Portal', 'admin_url', 'portal/adminorder/menuorder', NULL, '选项管理', 1, ''),
(209, 'Portal', 'admin_url', 'portal/adminbonus/portal/adminbonus/default', NULL, '系统设置', 1, ''),
(210, 'Portal', 'admin_url', 'portal/adminserver/index', NULL, '服务器管理', 1, ''),
(211, 'Portal', 'admin_url', 'portal/adminpost/download', NULL, '下载单页', 1, ''),
(212, 'Portal', 'admin_url', 'portal/adminpage/download', NULL, '下载单页', 1, ''),
(213, 'Portal', 'admin_url', 'portal/adminyouxi/default', NULL, '游戏管理', 1, ''),
(214, 'Portal', 'admin_url', 'portal/adminyouxi/typeone', NULL, '游戏种类', 1, ''),
(215, 'Portal', 'admin_url', 'portal/adminyouxi/typetwo', NULL, '游戏玩法', 1, ''),
(216, 'Portal', 'admin_url', 'portal/adminyouxi/typeonelist', NULL, '游戏种类', 1, ''),
(217, 'Portal', 'admin_url', 'portal/adminyouxi/typetwolist', NULL, '游戏玩法', 1, ''),
(218, 'Portal', 'admin_url', 'portal/adminyouxi/gamelist', NULL, '游戏种类', 1, ''),
(219, 'Portal', 'admin_url', 'portal/adminyouxi/rulelise', NULL, '游戏玩法', 1, ''),
(220, 'Portal', 'admin_url', 'portal/adminyouxi/rulelist', NULL, '游戏玩法', 1, ''),
(221, 'Portal', 'admin_url', 'portal/adminbonus/bhbonus', NULL, '', 1, ''),
(222, 'Portal', 'admin_url', 'portal/adminbonus/bonuspost', NULL, '', 1, ''),
(223, 'Portal', 'admin_url', 'portal/adminbonus/extractpost', NULL, '', 1, ''),
(224, 'Portal', 'admin_url', 'portal/adminmachine/index', NULL, '机器人管理', 1, ''),
(225, 'Portal', 'admin_url', 'portal/adminuseragent/index', NULL, '代理管理', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `jz_comments`
--

CREATE TABLE IF NOT EXISTS `jz_comments` (
  `id` bigint(20) unsigned NOT NULL,
  `post_table` varchar(100) NOT NULL COMMENT '评论内容所在表，不带表前缀',
  `post_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '评论内容 id',
  `url` varchar(255) DEFAULT NULL COMMENT '原文地址',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发表评论的用户id',
  `to_uid` int(11) NOT NULL DEFAULT '0' COMMENT '被评论的用户id',
  `full_name` varchar(50) DEFAULT NULL COMMENT '评论者昵称',
  `email` varchar(255) DEFAULT NULL COMMENT '评论者邮箱',
  `createtime` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '评论时间',
  `content` text NOT NULL COMMENT '评论内容',
  `type` smallint(1) NOT NULL DEFAULT '1' COMMENT '评论类型；1实名评论',
  `parentid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '被回复的评论id',
  `path` varchar(500) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '1' COMMENT '状态，1已审核，0未审核'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_common_action_log`
--

CREATE TABLE IF NOT EXISTS `jz_common_action_log` (
  `id` int(11) NOT NULL,
  `user` bigint(20) DEFAULT '0' COMMENT '用户id',
  `object` varchar(100) DEFAULT NULL COMMENT '访问对象的id,格式：不带前缀的表名+id;如posts1表示xx_posts表里id为1的记录',
  `action` varchar(50) DEFAULT NULL COMMENT '操作名称；格式规定为：应用名+控制器+操作名；也可自己定义格式只要不发生冲突且惟一；',
  `count` int(11) DEFAULT '0' COMMENT '访问次数',
  `last_time` int(11) DEFAULT '0' COMMENT '最后访问的时间戳',
  `ip` varchar(15) DEFAULT NULL COMMENT '访问者最后访问ip'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_dj_room`
--

CREATE TABLE IF NOT EXISTS `jz_dj_room` (
  `id` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `js` int(11) NOT NULL,
  `djxx` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `jz_fk_bag`
--

CREATE TABLE IF NOT EXISTS `jz_fk_bag` (
  `id` int(11) NOT NULL,
  `send_id` int(11) NOT NULL,
  `get_id` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `add_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  `end_time` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mis` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `jz_game`
--

CREATE TABLE IF NOT EXISTS `jz_game` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `zt` int(11) NOT NULL,
  `img` text CHARACTER SET utf8 NOT NULL,
  `type` enum('beast','daoyou') NOT NULL DEFAULT 'beast',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `jz_game`
--

INSERT INTO `jz_game` (`id`, `name`, `zt`, `img`, `type`, `sort`) VALUES
(1, '六人斗牛', 1, 'portal/20171010/59dc6886bc732.png', 'beast', 999),
(2, '九人斗牛', 1, 'portal/20171010/59dc6878138b1.png', 'beast', 888),
(3, '三公', 2, 'portal/20171010/59dc686788be8.png', 'beast', 0),
(4, '九人三公', 1, 'portal/20171010/59dc5e9af062e.jpg', 'beast', 300),
(5, '炸金花', 1, 'portal/20171010/59dc6841ab5f3.png', 'beast', 400),
(6, '二八杠', 1, 'portal/20171010/59dc6831bd75c.png', 'beast', 150),
(7, '广东麻将', 2, 'portal/20171010/59dc682038671.png', 'beast', 0),
(8, '斗地主', 2, 'portal/20171010/59dc680f18e9d.png', 'beast', 0),
(9, '斗公牛', 2, 'portal/20171010/59dc67fbb8cca.png', 'beast', 0),
(10, '十二人斗牛', 1, 'portal/20171019/59e80c2def2e8.png', 'beast', 555),
(11, '青龙大厅', 2, '', 'beast', 0),
(12, '123', 2, '', 'beast', 0),
(13, '123', 2, '', 'beast', 0),
(14, '九人斗牛八倍', 1, '', 'beast', 500),
(15, '十人牛牛', 1, '', 'beast', 0),
(16, '九人炸金花', 1, '', 'beast', 250),
(17, '12人吉祥三公', 1, 'portal/20171227/5a43546f7fef9.png', 'beast', 200),
(18, '十人牌九', 1, 'portal/20180109/5a54d30a7c1aa.jpg', 'daoyou', 0),
(19, '十人牛牛', 1, '', 'daoyou', 0),
(20, '八人大牌九', 1, '', 'daoyou', 0),
(21, '十人鱼虾蟹', 1, '', 'daoyou', 0),
(22, '六人牌九', 1, '', 'daoyou', 0),
(23, '六人牛牛', 1, '', 'daoyou', 0),
(24, '广东麻将', 2, '', 'daoyou', 0),
(25, '十人德州扑克', 1, '', 'daoyou', 0),
(26, '12人鱼虾蟹', 1, '', 'beast', 700),
(27, '牌九', 1, '', 'beast', 599),
(28, '十三人牛牛', 1, '', 'beast', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jz_guestbook`
--

CREATE TABLE IF NOT EXISTS `jz_guestbook` (
  `id` int(11) NOT NULL COMMENT '前台提交信息，留言、申请等',
  `MA_type` varchar(30) DEFAULT '' COMMENT '数据类型',
  `title` varchar(60) DEFAULT '' COMMENT '留言主题',
  `create_time` datetime DEFAULT NULL COMMENT '提交时间',
  `MA_replyTime` datetime DEFAULT NULL COMMENT '回复时间',
  `MA_dataID` int(11) DEFAULT '0' COMMENT '与其它表关联ID',
  `MA_userID` int(11) DEFAULT '0' COMMENT '与用户表关联ID',
  `user_login` varchar(50) DEFAULT '' COMMENT '留言用户名，管理列表显示',
  `MA_contact` text COMMENT '联系方式',
  `MA_userInfo` text COMMENT '用户其它相关信息',
  `MA_subIP` varchar(50) DEFAULT NULL COMMENT '信息提交IP',
  `type` text COMMENT '其它信息',
  `msg` text COMMENT '用户留言内容',
  `reply` text COMMENT '管理员回复内容',
  `MA_status` smallint(1) DEFAULT '0' COMMENT '审核状态',
  `status` int(8) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=231 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_links`
--

CREATE TABLE IF NOT EXISTS `jz_links` (
  `link_id` bigint(20) unsigned NOT NULL,
  `link_url` varchar(255) NOT NULL COMMENT '友情链接地址',
  `link_name` varchar(255) NOT NULL COMMENT '友情链接名称',
  `link_image` varchar(255) DEFAULT NULL COMMENT '友情链接图标',
  `link_target` varchar(25) NOT NULL DEFAULT '_blank' COMMENT '友情链接打开方式',
  `link_description` text NOT NULL COMMENT '友情链接描述',
  `link_status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示',
  `link_rating` int(11) NOT NULL DEFAULT '0' COMMENT '友情链接评级',
  `link_rel` varchar(255) DEFAULT NULL COMMENT '链接与网站的关系',
  `listorder` int(10) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_links`
--

INSERT INTO `jz_links` (`link_id`, `link_url`, `link_name`, `link_image`, `link_target`, `link_description`, `link_status`, `link_rating`, `link_rel`, `listorder`) VALUES
(1, 'http://www.thinkcmf.com', 'ThinkCMF', '', '_blank', '', 1, 0, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jz_list`
--

CREATE TABLE IF NOT EXISTS `jz_list` (
  `id` int(10) unsigned NOT NULL,
  `agent` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `daycard` int(10) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COMMENT='用户代理表';

--
-- 转存表中的数据 `jz_list`
--

INSERT INTO `jz_list` (`id`, `agent`, `uid`, `daycard`, `time`, `created`) VALUES
(67, 87, 87, 0, 1527735780, '2018-05-03 03:03:48'),
(107, 5742, 5742, 0, 1526122783, '2018-05-11 10:59:43'),
(130, 87, 126933, 0, 1526874653, '2018-05-20 03:50:53'),
(131, 45936, 131631, 0, 1526881551, '2018-05-20 05:45:51'),
(132, 87, 64467, 0, 1526890448, '2018-05-20 08:14:08');

-- --------------------------------------------------------

--
-- 表的结构 `jz_menu`
--

CREATE TABLE IF NOT EXISTS `jz_menu` (
  `id` smallint(6) unsigned NOT NULL,
  `parentid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `app` varchar(30) NOT NULL DEFAULT '' COMMENT '应用名称app',
  `model` varchar(30) NOT NULL DEFAULT '' COMMENT '控制器',
  `action` varchar(50) NOT NULL DEFAULT '' COMMENT '操作名称',
  `data` varchar(50) NOT NULL DEFAULT '' COMMENT '额外参数',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '菜单类型  1：权限认证+菜单；0：只作为菜单',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态，1显示，0不显示',
  `name` varchar(5000) NOT NULL COMMENT '菜单名称',
  `icon` varchar(50) DEFAULT NULL COMMENT '菜单图标',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序ID'
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_menu`
--

INSERT INTO `jz_menu` (`id`, `parentid`, `app`, `model`, `action`, `data`, `type`, `status`, `name`, `icon`, `remark`, `listorder`) VALUES
(1, 0, 'Admin', 'Content', 'default', '', 0, 0, '文章管理', 'th', '', 30),
(4, 1, 'Comment', 'Commentadmin', 'index', '', 1, 0, '评论管理', '', '', 0),
(5, 4, 'Comment', 'Commentadmin', 'delete', '', 1, 0, '删除评论', '', '', 0),
(6, 4, 'Comment', 'Commentadmin', 'check', '', 1, 0, '评论审核', '', '', 0),
(7, 1, 'Portal', 'AdminPost', 'index', '', 1, 0, '新闻公告', '', '', 1),
(8, 7, 'Portal', 'AdminPost', 'listorders', '', 1, 0, '文章排序', '', '', 0),
(9, 7, 'Portal', 'AdminPost', 'top', '', 1, 0, '文章置顶', '', '', 0),
(10, 7, 'Portal', 'AdminPost', 'recommend', '', 1, 0, '文章推荐', '', '', 0),
(11, 7, 'Portal', 'AdminPost', 'move', '', 1, 0, '批量移动', '', '', 1000),
(12, 7, 'Portal', 'AdminPost', 'check', '', 1, 0, '文章审核', '', '', 1000),
(13, 7, 'Portal', 'AdminPost', 'delete', '', 1, 0, '删除文章', '', '', 1000),
(14, 7, 'Portal', 'AdminPost', 'edit', '', 1, 0, '编辑文章', '', '', 1000),
(15, 14, 'Portal', 'AdminPost', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(16, 7, 'Portal', 'AdminPost', 'add', '', 1, 0, '添加文章', '', '', 1000),
(17, 16, 'Portal', 'AdminPost', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(18, 1, 'Portal', 'AdminTerm', 'index', '', 0, 0, '分类管理', '', '', 2),
(19, 18, 'Portal', 'AdminTerm', 'listorders', '', 1, 0, '文章分类排序', '', '', 0),
(20, 18, 'Portal', 'AdminTerm', 'delete', '', 1, 0, '删除分类', '', '', 1000),
(21, 18, 'Portal', 'AdminTerm', 'edit', '', 1, 0, '编辑分类', '', '', 1000),
(22, 21, 'Portal', 'AdminTerm', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(23, 18, 'Portal', 'AdminTerm', 'add', '', 1, 0, '添加分类', '', '', 1000),
(24, 23, 'Portal', 'AdminTerm', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(25, 1, 'Portal', 'AdminPage', 'index', '', 1, 0, '页面管理', '', '', 3),
(26, 25, 'Portal', 'AdminPage', 'listorders', '', 1, 0, '页面排序', '', '', 0),
(27, 25, 'Portal', 'AdminPage', 'delete', '', 1, 0, '删除页面', '', '', 1000),
(28, 25, 'Portal', 'AdminPage', 'edit', '', 1, 0, '编辑页面', '', '', 1000),
(29, 28, 'Portal', 'AdminPage', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(30, 25, 'Portal', 'AdminPage', 'add', '', 1, 0, '添加页面', '', '', 1000),
(31, 30, 'Portal', 'AdminPage', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(32, 1, 'Admin', 'Recycle', 'default', '', 1, 0, '回收站', '', '', 4),
(33, 32, 'Portal', 'AdminPost', 'recyclebin', '', 1, 1, '文章回收', '', '', 0),
(34, 33, 'Portal', 'AdminPost', 'restore', '', 1, 0, '文章还原', '', '', 1000),
(35, 33, 'Portal', 'AdminPost', 'clean', '', 1, 0, '彻底删除', '', '', 1000),
(36, 32, 'Portal', 'AdminPage', 'recyclebin', '', 1, 0, '页面回收', '', '', 1),
(37, 36, 'Portal', 'AdminPage', 'clean', '', 1, 0, '彻底删除', '', '', 1000),
(38, 36, 'Portal', 'AdminPage', 'restore', '', 1, 0, '页面还原', '', '', 1000),
(39, 0, 'Admin', 'Extension', 'default', '', 0, 0, '扩展工具', 'cloud', '', 40),
(40, 0, 'Admin', 'Backup', 'default', '', 1, 1, '备份管理', 'database', '', 3),
(41, 40, 'Admin', 'Backup', 'restore', '', 1, 1, '数据还原', '', '', 0),
(42, 40, 'Admin', 'Backup', 'index', '', 1, 1, '数据备份', '', '', 0),
(43, 42, 'Admin', 'Backup', 'index_post', '', 1, 0, '提交数据备份', '', '', 0),
(44, 40, 'Admin', 'Backup', 'download', '', 1, 0, '下载备份', '', '', 1000),
(45, 40, 'Admin', 'Backup', 'del_backup', '', 1, 0, '删除备份', '', '', 1000),
(46, 40, 'Admin', 'Backup', 'import', '', 1, 0, '数据备份导入', '', '', 1000),
(47, 39, 'Admin', 'Plugin', 'index', '', 1, 1, '插件管理', '', '', 0),
(48, 47, 'Admin', 'Plugin', 'toggle', '', 1, 0, '插件启用切换', '', '', 0),
(49, 47, 'Admin', 'Plugin', 'setting', '', 1, 0, '插件设置', '', '', 0),
(50, 49, 'Admin', 'Plugin', 'setting_post', '', 1, 0, '插件设置提交', '', '', 0),
(51, 47, 'Admin', 'Plugin', 'install', '', 1, 1, '插件安装', '', '', 0),
(52, 47, 'Admin', 'Plugin', 'uninstall', '', 1, 0, '插件卸载', '', '', 0),
(53, 39, 'Admin', 'Slide', 'default', '', 1, 1, '幻灯片', '', '', 1),
(54, 53, 'Admin', 'Slide', 'index', '', 1, 1, '幻灯片管理', '', '', 0),
(55, 54, 'Admin', 'Slide', 'listorders', '', 1, 0, '幻灯片排序', '', '', 0),
(56, 54, 'Admin', 'Slide', 'toggle', '', 1, 0, '幻灯片显示切换', '', '', 0),
(57, 54, 'Admin', 'Slide', 'delete', '', 1, 0, '删除幻灯片', '', '', 1000),
(58, 54, 'Admin', 'Slide', 'edit', '', 1, 0, '编辑幻灯片', '', '', 1000),
(59, 58, 'Admin', 'Slide', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(60, 54, 'Admin', 'Slide', 'add', '', 1, 0, '添加幻灯片', '', '', 1000),
(61, 60, 'Admin', 'Slide', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(62, 53, 'Admin', 'Slidecat', 'index', '', 1, 1, '幻灯片分类', '', '', 0),
(63, 62, 'Admin', 'Slidecat', 'delete', '', 1, 0, '删除分类', '', '', 1000),
(64, 62, 'Admin', 'Slidecat', 'edit', '', 1, 0, '编辑分类', '', '', 1000),
(65, 64, 'Admin', 'Slidecat', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(66, 62, 'Admin', 'Slidecat', 'add', '', 1, 0, '添加分类', '', '', 1000),
(67, 66, 'Admin', 'Slidecat', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(68, 39, 'Admin', 'Ad', 'index', '', 1, 1, '网站广告', '', '', 2),
(69, 68, 'Admin', 'Ad', 'toggle', '', 1, 0, '广告显示切换', '', '', 0),
(70, 68, 'Admin', 'Ad', 'delete', '', 1, 0, '删除广告', '', '', 1000),
(71, 68, 'Admin', 'Ad', 'edit', '', 1, 0, '编辑广告', '', '', 1000),
(72, 71, 'Admin', 'Ad', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(73, 68, 'Admin', 'Ad', 'add', '', 1, 0, '添加广告', '', '', 1000),
(74, 73, 'Admin', 'Ad', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(75, 39, 'Admin', 'Link', 'index', '', 0, 1, '友情链接', '', '', 3),
(76, 75, 'Admin', 'Link', 'listorders', '', 1, 0, '友情链接排序', '', '', 0),
(77, 75, 'Admin', 'Link', 'toggle', '', 1, 0, '友链显示切换', '', '', 0),
(78, 75, 'Admin', 'Link', 'delete', '', 1, 0, '删除友情链接', '', '', 1000),
(79, 75, 'Admin', 'Link', 'edit', '', 1, 0, '编辑友情链接', '', '', 1000),
(80, 79, 'Admin', 'Link', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(81, 75, 'Admin', 'Link', 'add', '', 1, 0, '添加友情链接', '', '', 1000),
(82, 81, 'Admin', 'Link', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(83, 39, 'Api', 'Oauthadmin', 'setting', '', 1, 1, '第三方登陆', 'leaf', '', 4),
(84, 83, 'Api', 'Oauthadmin', 'setting_post', '', 1, 0, '提交设置', '', '', 0),
(85, 0, 'Admin', 'Menu', 'default', '', 1, 0, '菜单管理', 'list', '', 20),
(86, 85, 'Admin', 'Navcat', 'default1', '', 1, 1, '前台菜单', '', '', 0),
(87, 86, 'Admin', 'Nav', 'index', '', 1, 1, '菜单管理', '', '', 0),
(88, 87, 'Admin', 'Nav', 'listorders', '', 1, 0, '前台导航排序', '', '', 0),
(89, 87, 'Admin', 'Nav', 'delete', '', 1, 0, '删除菜单', '', '', 1000),
(90, 87, 'Admin', 'Nav', 'edit', '', 1, 0, '编辑菜单', '', '', 1000),
(91, 90, 'Admin', 'Nav', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(92, 87, 'Admin', 'Nav', 'add', '', 1, 0, '添加菜单', '', '', 1000),
(93, 92, 'Admin', 'Nav', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(94, 86, 'Admin', 'Navcat', 'index', '', 1, 1, '菜单分类', '', '', 0),
(95, 94, 'Admin', 'Navcat', 'delete', '', 1, 0, '删除分类', '', '', 1000),
(96, 94, 'Admin', 'Navcat', 'edit', '', 1, 0, '编辑分类', '', '', 1000),
(97, 96, 'Admin', 'Navcat', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(98, 94, 'Admin', 'Navcat', 'add', '', 1, 0, '添加分类', '', '', 1000),
(99, 98, 'Admin', 'Navcat', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(100, 85, 'Admin', 'Menu', 'index', '', 1, 1, '后台菜单', '', '', 0),
(101, 100, 'Admin', 'Menu', 'add', '', 1, 0, '添加菜单', '', '', 0),
(102, 101, 'Admin', 'Menu', 'add_post', '', 1, 0, '提交添加', '', '', 0),
(103, 100, 'Admin', 'Menu', 'listorders', '', 1, 0, '后台菜单排序', '', '', 0),
(104, 100, 'Admin', 'Menu', 'export_menu', '', 1, 0, '菜单备份', '', '', 1000),
(105, 100, 'Admin', 'Menu', 'edit', '', 1, 0, '编辑菜单', '', '', 1000),
(106, 105, 'Admin', 'Menu', 'edit_post', '', 1, 0, '提交编辑', '', '', 0),
(107, 100, 'Admin', 'Menu', 'delete', '', 1, 0, '删除菜单', '', '', 1000),
(108, 100, 'Admin', 'Menu', 'lists', '', 1, 0, '所有菜单', '', '', 1000),
(109, 0, 'Admin', 'Setting', 'default', '', 0, 1, '设置', 'cogs', '', 0),
(110, 109, 'Admin', 'Setting', 'userdefault', '', 0, 1, '个人信息', '', '', 0),
(111, 110, 'Admin', 'User', 'userinfo', '', 1, 1, '修改信息', '', '', 0),
(112, 111, 'Admin', 'User', 'userinfo_post', '', 1, 0, '修改信息提交', '', '', 0),
(113, 110, 'Admin', 'Setting', 'password', '', 1, 1, '修改密码', '', '', 0),
(114, 113, 'Admin', 'Setting', 'password_post', '', 1, 0, '提交修改', '', '', 0),
(115, 109, 'Admin', 'Setting', 'site', '', 1, 1, '网站信息', '', '', 0),
(116, 115, 'Admin', 'Setting', 'site_post', '', 1, 0, '提交修改', '', '', 0),
(117, 115, 'Admin', 'Route', 'index', '', 1, 0, '路由列表', '', '', 0),
(118, 115, 'Admin', 'Route', 'add', '', 1, 0, '路由添加', '', '', 0),
(119, 118, 'Admin', 'Route', 'add_post', '', 1, 0, '路由添加提交', '', '', 0),
(120, 115, 'Admin', 'Route', 'edit', '', 1, 0, '路由编辑', '', '', 0),
(121, 120, 'Admin', 'Route', 'edit_post', '', 1, 0, '路由编辑提交', '', '', 0),
(122, 115, 'Admin', 'Route', 'delete', '', 1, 0, '路由删除', '', '', 0),
(123, 115, 'Admin', 'Route', 'ban', '', 1, 0, '路由禁止', '', '', 0),
(124, 115, 'Admin', 'Route', 'open', '', 1, 0, '路由启用', '', '', 0),
(125, 115, 'Admin', 'Route', 'listorders', '', 1, 0, '路由排序', '', '', 0),
(126, 109, 'Admin', 'Mailer', 'default', '', 1, 0, '邮箱配置', '', '', 0),
(127, 126, 'Admin', 'Mailer', 'index', '', 1, 1, 'SMTP配置', '', '', 0),
(128, 127, 'Admin', 'Mailer', 'index_post', '', 1, 0, '提交配置', '', '', 0),
(129, 126, 'Admin', 'Mailer', 'active', '', 1, 1, '注册邮件模板', '', '', 0),
(130, 129, 'Admin', 'Mailer', 'active_post', '', 1, 0, '提交模板', '', '', 0),
(131, 109, 'Admin', 'Setting', 'clearcache', '', 1, 0, '清除缓存', '', '', 1),
(132, 0, 'User', 'Indexadmin', 'default', '', 1, 0, '用户管理', 'group', '', 10),
(133, 132, 'User', 'Indexadmin', 'default1', '', 1, 1, '用户组', '', '', 0),
(134, 133, 'User', 'Indexadmin', 'index', '', 1, 1, '本站用户', 'leaf', '', 0),
(135, 134, 'User', 'Indexadmin', 'ban', '', 1, 0, '拉黑会员', '', '', 0),
(136, 134, 'User', 'Indexadmin', 'cancelban', '', 1, 0, '启用会员', '', '', 0),
(137, 133, 'User', 'Oauthadmin', 'index', '', 1, 1, '第三方用户', 'leaf', '', 0),
(138, 137, 'User', 'Oauthadmin', 'delete', '', 1, 0, '第三方用户解绑', '', '', 0),
(139, 109, 'User', 'Indexadmin', 'default3', '', 1, 1, '管理组', 'tty', '', 0),
(140, 139, 'Admin', 'Rbac', 'index', '', 1, 0, '角色管理', '', '', 0),
(141, 140, 'Admin', 'Rbac', 'member', '', 1, 0, '成员管理', '', '', 1000),
(142, 140, 'Admin', 'Rbac', 'authorize', '', 1, 0, '权限设置', '', '', 1000),
(143, 142, 'Admin', 'Rbac', 'authorize_post', '', 1, 0, '提交设置', '', '', 0),
(144, 140, 'Admin', 'Rbac', 'roleedit', '', 1, 0, '编辑角色', '', '', 1000),
(145, 144, 'Admin', 'Rbac', 'roleedit_post', '', 1, 0, '提交编辑', '', '', 0),
(146, 140, 'Admin', 'Rbac', 'roledelete', '', 1, 1, '删除角色', '', '', 1000),
(147, 140, 'Admin', 'Rbac', 'roleadd', '', 1, 1, '添加角色', '', '', 1000),
(148, 147, 'Admin', 'Rbac', 'roleadd_post', '', 1, 0, '提交添加', '', '', 0),
(149, 139, 'Admin', 'User', 'index', '', 1, 1, '管理员', '', '', 0),
(150, 149, 'Admin', 'User', 'delete', '', 1, 0, '删除管理员', '', '', 1000),
(151, 149, 'Admin', 'User', 'edit', '', 1, 0, '管理员编辑', '', '', 1000),
(152, 151, 'Admin', 'User', 'edit_post', '', 1, 0, '编辑提交', '', '', 0),
(153, 149, 'Admin', 'User', 'add', '', 1, 0, '管理员添加', '', '', 1000),
(154, 153, 'Admin', 'User', 'add_post', '', 1, 0, '添加提交', '', '', 0),
(155, 47, 'Admin', 'Plugin', 'update', '', 1, 0, '插件更新', '', '', 0),
(156, 109, 'Admin', 'Storage', 'index', '', 1, 0, '文件存储', '', '', 0),
(157, 156, 'Admin', 'Storage', 'setting_post', '', 1, 0, '文件存储设置提交', '', '', 0),
(158, 54, 'Admin', 'Slide', 'ban', '', 1, 0, '禁用幻灯片', '', '', 0),
(159, 54, 'Admin', 'Slide', 'cancelban', '', 1, 0, '启用幻灯片', '', '', 0),
(160, 149, 'Admin', 'User', 'ban', '', 1, 0, '禁用管理员', '', '', 0),
(161, 149, 'Admin', 'User', 'cancelban', '', 1, 0, '启用管理员', '', '', 0),
(166, 127, 'Admin', 'Mailer', 'test', '', 1, 0, '测试邮件', '', '', 0),
(167, 109, 'Admin', 'Setting', 'upload', '', 1, 0, '上传设置', '', '', 0),
(168, 167, 'Admin', 'Setting', 'upload_post', '', 1, 0, '上传设置提交', '', '', 0),
(169, 7, 'Portal', 'AdminPost', 'copy', '', 1, 0, '文章批量复制', '', '', 0),
(174, 100, 'Admin', 'Menu', 'backup_menu', '', 1, 0, '备份菜单', '', '', 0),
(175, 100, 'Admin', 'Menu', 'export_menu_lang', '', 1, 0, '导出后台菜单多语言包', '', '', 0),
(176, 100, 'Admin', 'Menu', 'restore_menu', '', 1, 0, '还原菜单', '', '', 0),
(177, 100, 'Admin', 'Menu', 'getactions', '', 1, 0, '导入新菜单', '', '', 0),
(187, 1, 'Portal', 'AdminPost', 'aid', '', 1, 0, '援助公告', '', '', 0),
(188, 0, 'Portal', 'AdminUser', 'default', '', 1, 1, '会员管理', 'group', '', 0),
(189, 188, 'Portal', 'AdminUser', 'index', '', 1, 1, '所有会员', '', '', 0),
(190, 188, 'Portal', 'AdminUser', 'editMoney', '', 1, 1, '房卡操作', '', '', 0),
(191, 188, 'Portal', 'AdminUser', 'relationship', '', 1, 0, '会员关系网', '', '', 0),
(221, 0, 'Portal', 'AdminBonus', 'default', '', 1, 1, '系统设置', 'plug', '', 255),
(222, 221, 'Portal', 'AdminBonus', 'bonusSet', '', 1, 1, '变量设置', '', '', 0),
(223, 221, 'Portal', 'AdminServer', 'index', '', 1, 1, '服务器管理', '', '', 0),
(224, 1, 'Portal', 'AdminPage', 'download', 'id=1', 1, 1, '下载单页', '', '', 0),
(225, 0, 'Portal', 'AdminYouxi', 'default', '', 1, 1, '游戏管理', 'futbol-o', '', 0),
(226, 225, 'Portal', 'AdminYouxi', 'GameList', '', 1, 1, '游戏种类', '', '', 0),
(227, 225, 'Portal', 'AdminYouxi', 'RuleList', '', 1, 1, '游戏玩法', '', '', 0),
(228, 221, 'Portal', 'AdminBonus', 'extractSet', '', 1, 1, '微信设置', '', '', 0),
(229, 0, 'Portal', 'AdminBonus', 'bhbonus', '', 1, 0, '未知', NULL, '', 0),
(230, 0, 'Portal', 'AdminBonus', 'bonusPost', '', 1, 0, '未知', NULL, '', 0),
(231, 0, 'Portal', 'AdminBonus', 'extractPost', '', 1, 0, '未知', NULL, '', 0),
(232, 188, 'Portal', 'AdminMachine', 'index', '', 1, 1, '机器人管理', '', '', 0),
(233, 188, 'Portal', 'AdminUserAgent', 'index', '', 1, 0, '代理管理', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `jz_nav`
--

CREATE TABLE IF NOT EXISTS `jz_nav` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL COMMENT '导航分类 id',
  `parentid` int(11) NOT NULL COMMENT '导航父 id',
  `label` varchar(255) NOT NULL COMMENT '导航标题',
  `target` varchar(50) DEFAULT NULL COMMENT '打开方式',
  `href` varchar(255) NOT NULL COMMENT '导航链接',
  `icon` varchar(255) NOT NULL COMMENT '导航图标',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示',
  `listorder` int(6) DEFAULT '0' COMMENT '排序',
  `path` varchar(255) NOT NULL DEFAULT '0' COMMENT '层级关系'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_nav`
--

INSERT INTO `jz_nav` (`id`, `cid`, `parentid`, `label`, `target`, `href`, `icon`, `status`, `listorder`, `path`) VALUES
(1, 1, 0, '首页', '', 'home', '', 1, 0, '0-1'),
(2, 1, 0, '列表演示', '', 'a:2:{s:6:"action";s:17:"Portal/List/index";s:5:"param";a:1:{s:2:"id";s:1:"1";}}', '', 1, 0, '0-2'),
(3, 1, 0, '瀑布流', '', 'a:2:{s:6:"action";s:17:"Portal/List/index";s:5:"param";a:1:{s:2:"id";s:1:"2";}}', '', 1, 0, '0-3');

-- --------------------------------------------------------

--
-- 表的结构 `jz_nav_cat`
--

CREATE TABLE IF NOT EXISTS `jz_nav_cat` (
  `navcid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '导航分类名',
  `active` int(1) NOT NULL DEFAULT '1' COMMENT '是否为主菜单，1是，0不是',
  `remark` text COMMENT '备注'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_nav_cat`
--

INSERT INTO `jz_nav_cat` (`navcid`, `name`, `active`, `remark`) VALUES
(1, '主导航', 1, '主导航');

-- --------------------------------------------------------

--
-- 表的结构 `jz_oauth_user`
--

CREATE TABLE IF NOT EXISTS `jz_oauth_user` (
  `id` int(20) NOT NULL,
  `from` varchar(20) NOT NULL COMMENT '用户来源key',
  `name` varchar(30) NOT NULL COMMENT '第三方昵称',
  `head_img` varchar(200) NOT NULL COMMENT '头像',
  `uid` int(20) NOT NULL COMMENT '关联的本站用户id',
  `create_time` datetime NOT NULL COMMENT '绑定时间',
  `last_login_time` datetime NOT NULL COMMENT '最后登录时间',
  `last_login_ip` varchar(16) NOT NULL COMMENT '最后登录ip',
  `login_times` int(6) NOT NULL COMMENT '登录次数',
  `status` tinyint(2) NOT NULL,
  `access_token` varchar(512) NOT NULL,
  `expires_date` int(11) NOT NULL COMMENT 'access_token过期时间',
  `openid` varchar(40) NOT NULL COMMENT '第三方用户id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_options`
--

CREATE TABLE IF NOT EXISTS `jz_options` (
  `option_id` bigint(20) unsigned NOT NULL,
  `option_name` varchar(64) NOT NULL COMMENT '配置名',
  `option_value` longtext NOT NULL COMMENT '配置值',
  `autoload` int(2) NOT NULL DEFAULT '1' COMMENT '是否自动加载'
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_options`
--

INSERT INTO `jz_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'member_email_active', '{"title":"ThinkCMF\\u90ae\\u4ef6\\u6fc0\\u6d3b\\u901a\\u77e5.","template":"<p>\\u672c\\u90ae\\u4ef6\\u6765\\u81ea<a href=\\"http:\\/\\/www.thinkcmf.com\\">ThinkCMF<\\/a><br\\/><br\\/>&nbsp; &nbsp;<strong>---------------<strong style=\\"white-space: normal;\\">---<\\/strong><\\/strong><br\\/>&nbsp; &nbsp;<strong>\\u5e10\\u53f7\\u6fc0\\u6d3b\\u8bf4\\u660e<\\/strong><br\\/>&nbsp; &nbsp;<strong>---------------<strong style=\\"white-space: normal;\\">---<\\/strong><\\/strong><br\\/><br\\/>&nbsp; &nbsp; \\u5c0a\\u656c\\u7684<span style=\\"FONT-SIZE: 16px; FONT-FAMILY: Arial; COLOR: rgb(51,51,51); LINE-HEIGHT: 18px; BACKGROUND-COLOR: rgb(255,255,255)\\">#username#\\uff0c\\u60a8\\u597d\\u3002<\\/span>\\u5982\\u679c\\u60a8\\u662fThinkCMF\\u7684\\u65b0\\u7528\\u6237\\uff0c\\u6216\\u5728\\u4fee\\u6539\\u60a8\\u7684\\u6ce8\\u518cEmail\\u65f6\\u4f7f\\u7528\\u4e86\\u672c\\u5730\\u5740\\uff0c\\u6211\\u4eec\\u9700\\u8981\\u5bf9\\u60a8\\u7684\\u5730\\u5740\\u6709\\u6548\\u6027\\u8fdb\\u884c\\u9a8c\\u8bc1\\u4ee5\\u907f\\u514d\\u5783\\u573e\\u90ae\\u4ef6\\u6216\\u5730\\u5740\\u88ab\\u6ee5\\u7528\\u3002<br\\/>&nbsp; &nbsp; \\u60a8\\u53ea\\u9700\\u70b9\\u51fb\\u4e0b\\u9762\\u7684\\u94fe\\u63a5\\u5373\\u53ef\\u6fc0\\u6d3b\\u60a8\\u7684\\u5e10\\u53f7\\uff1a<br\\/>&nbsp; &nbsp; <a title=\\"\\" href=\\"http:\\/\\/#link#\\" target=\\"_self\\">http:\\/\\/#link#<\\/a><br\\/>&nbsp; &nbsp; (\\u5982\\u679c\\u4e0a\\u9762\\u4e0d\\u662f\\u94fe\\u63a5\\u5f62\\u5f0f\\uff0c\\u8bf7\\u5c06\\u8be5\\u5730\\u5740\\u624b\\u5de5\\u7c98\\u8d34\\u5230\\u6d4f\\u89c8\\u5668\\u5730\\u5740\\u680f\\u518d\\u8bbf\\u95ee)<br\\/>&nbsp; &nbsp; \\u611f\\u8c22\\u60a8\\u7684\\u8bbf\\u95ee\\uff0c\\u795d\\u60a8\\u4f7f\\u7528\\u6109\\u5feb\\uff01<br\\/><br\\/>&nbsp; &nbsp; \\u6b64\\u81f4<br\\/>&nbsp; &nbsp; ThinkCMF \\u7ba1\\u7406\\u56e2\\u961f.<\\/p>"}', 1),
(2, 'site_options', '{"site_name":"\\u6e38\\u620f\\u5927\\u5385","site_admin_url_password":"","site_tpl":"gameserver","site_adminstyle":"bluesky","site_icp":"","site_admin_email":"admin@jiazhou.com","site_tongji":"","site_copyright":"","site_seo_title":"\\u822a\\u6d77\\u5bb6","site_seo_keywords":"\\u822a\\u6d77\\u5bb6","site_seo_description":"\\u822a\\u6d77\\u5bb6","urlmode":"1","html_suffix":"","comment_time_interval":"60"}', 1),
(3, 'cmf_settings', '{"banned_usernames":""}', 1),
(4, 'cdn_settings', '{"cdn_static_root":""}', 1),
(10, 'aid', '', 1),
(11, 'extract', '{"weixin_appid":"wx574367c83a7cddbe","weixin_key":"282c30ad5ed4c82d63f36a6aa278fcdd","access_token":"9_B5BG2U4JIdtYF4Ynog51Oj6CNFtdgerWh8fRzZebj3r0mH6bK3LHBuoSGpmtqkkhQ7EHIbD3TIwlFV1zUZRej9oysDyvBCR87FWFRekHuRHzaaYsm8sbHoo2CokS2EGy95bn33XuWgSLG708BQQeABAGVV","access_token_time":1526812205,"jsapi_ticket":"kgt8ON7yVITDhtdwci0qeTxx66jGGNSutsZHaeYyCxB1gwu6BIenlUqMrwOdRbU382NbyWyN_IVucsP-d3fg_g","jsapi_ticket_time":1526812205,"skin_name":"test-\\u795e\\u517d,baihu-\\u767d\\u864e,qinglong-\\u9752\\u9f99,zhuque-\\u6731\\u96c0,xuanwu-\\u7384\\u6b66,qilin-\\u9e92\\u9e9f,dasheng-\\u5927\\u5723,dasheng2-\\u8054\\u5408,dasheng3-\\u98de\\u9e70,dasheng4-518"}', 1),
(12, 'bonus', '{"zxonline":0,"zronline":0,"jronline":0,"gxtime":"2017-09-16 16:48:48","ggbody":"\\u9700\\u8981\\u7ba1\\u7406\\u8d26\\u6237\\u8bf7\\u8054\\u7cfb\\u5ba2\\u670d\\uff0c100\\u4eba\\u7248\\u3001300\\u4eba\\u7248\\u3001600\\u4eba\\u7248\\u3002","sfgg":"1","gj_ggtitle":"\\u56e2\\u961f\\u7248\\u7981\\u6b62\\u79c1\\u5356","gj_ggbody":"\\u56e2\\u961f\\u7248\\u4e3a\\u514d\\u8d39\\u63d0\\u4f9b\\uff0c\\u5982\\u679c\\u79c1\\u4e0b\\u4e70\\u4f1a\\u5458\\u8d26\\u53f7\\u7684\\uff0c\\u5956\\u52b1\\u4e3e\\u62a5\\u8005\\uff0c\\u5c01\\u56e2\\u961f\\u7ba1\\u7406\\u8d26\\u53f7\\u3002","ggtitle":"\\u591a\\u4eba\\u7248\\u5df2\\u7ecf\\u5f00\\u552e","sfts":0,"ipmax":"1","url":"zmm.test.com","xzhs":"21","sj":"1","tsxx":"\\u4eca\\u5929\\u7cfb\\u7edf\\u7ef4\\u62a4","blts":"3","thumb":"portal\\/20170705\\/595c9d0094844.png","img":"portal\\/20170629\\/5954f029c37bb.jpg","qq":"0"}', 1);

-- --------------------------------------------------------

--
-- 表的结构 `jz_order_guestbook`
--

CREATE TABLE IF NOT EXISTS `jz_order_guestbook` (
  `id` int(11) NOT NULL,
  `order_id` int(14) DEFAULT NULL,
  `user_login` varchar(14) DEFAULT NULL,
  `msg` text,
  `create_time` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=360 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_plugins`
--

CREATE TABLE IF NOT EXISTS `jz_plugins` (
  `id` int(11) unsigned NOT NULL COMMENT '自增id',
  `name` varchar(50) NOT NULL COMMENT '插件名，英文',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '插件名称',
  `description` text COMMENT '插件描述',
  `type` tinyint(2) DEFAULT '0' COMMENT '插件类型, 1:网站；8;微信',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态；1开启；',
  `config` text COMMENT '插件配置',
  `hooks` varchar(255) DEFAULT NULL COMMENT '实现的钩子;以“，”分隔',
  `has_admin` tinyint(2) DEFAULT '0' COMMENT '插件是否有后台管理界面',
  `author` varchar(50) DEFAULT '' COMMENT '插件作者',
  `version` varchar(20) DEFAULT '' COMMENT '插件版本号',
  `createtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '插件安装时间',
  `listorder` smallint(6) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_posts`
--

CREATE TABLE IF NOT EXISTS `jz_posts` (
  `id` bigint(20) unsigned NOT NULL,
  `post_author` bigint(20) unsigned DEFAULT '0' COMMENT '发表者id',
  `post_keywords` varchar(150) NOT NULL COMMENT 'seo keywords',
  `post_source` varchar(150) DEFAULT NULL COMMENT '转载文章的来源',
  `post_date` datetime DEFAULT '2000-01-01 00:00:00' COMMENT 'post创建日期，永久不变，一般不显示给用户',
  `post_content` longtext COMMENT 'post内容',
  `post_title` text COMMENT 'post标题',
  `post_excerpt` text COMMENT 'post摘要',
  `post_status` int(2) DEFAULT '1' COMMENT 'post状态，1已审核，0未审核,3删除',
  `comment_status` int(2) DEFAULT '1' COMMENT '评论状态，1允许，0不允许',
  `post_modified` datetime DEFAULT '2000-01-01 00:00:00' COMMENT 'post更新时间，可在前台修改，显示给用户',
  `post_content_filtered` longtext,
  `post_parent` bigint(20) unsigned DEFAULT '0' COMMENT 'post的父级post id,表示post层级关系',
  `post_type` int(2) DEFAULT '1' COMMENT 'post类型，1文章,2页面',
  `post_mime_type` varchar(100) DEFAULT '',
  `comment_count` bigint(20) DEFAULT '0',
  `smeta` text COMMENT 'post的扩展字段，保存相关扩展属性，如缩略图；格式为json',
  `post_hits` int(11) DEFAULT '0' COMMENT 'post点击数，查看数',
  `post_like` int(11) DEFAULT '0' COMMENT 'post赞数',
  `istop` tinyint(1) NOT NULL DEFAULT '0' COMMENT '置顶 1置顶； 0不置顶',
  `recommended` tinyint(1) NOT NULL DEFAULT '0' COMMENT '推荐 1推荐 0不推荐'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_qun`
--

CREATE TABLE IF NOT EXISTS `jz_qun` (
  `id` int(11) NOT NULL,
  `open` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `zt` int(11) NOT NULL DEFAULT '0',
  `credits` int(11) NOT NULL COMMENT '群成员积分',
  `createtime` int(11) NOT NULL COMMENT '加入时间'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `jz_role`
--

CREATE TABLE IF NOT EXISTS `jz_role` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(20) NOT NULL COMMENT '角色名称',
  `pid` smallint(6) DEFAULT NULL COMMENT '父角色ID',
  `status` tinyint(1) unsigned DEFAULT NULL COMMENT '状态',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `listorder` int(3) NOT NULL DEFAULT '0' COMMENT '排序字段'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_role`
--

INSERT INTO `jz_role` (`id`, `name`, `pid`, `status`, `remark`, `create_time`, `update_time`, `listorder`) VALUES
(1, '超级管理员', 0, 1, '拥有网站最高管理员权限！', 1329633709, 1329633709, 0),
(5, '客服', NULL, 1, '', 1480831157, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `jz_role_user`
--

CREATE TABLE IF NOT EXISTS `jz_role_user` (
  `role_id` int(11) unsigned DEFAULT '0' COMMENT '角色 id',
  `user_id` int(11) DEFAULT '0' COMMENT '用户id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_role_user`
--

INSERT INTO `jz_role_user` (`role_id`, `user_id`) VALUES
(1, 20),
(1, 8),
(1, 21),
(1, 23),
(1, 0),
(1, 0),
(1, 0),
(1, 31),
(5, 32),
(1, 27);

-- --------------------------------------------------------

--
-- 表的结构 `jz_room`
--

CREATE TABLE IF NOT EXISTS `jz_room` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `dk` int(11) NOT NULL,
  `rule` text CHARACTER SET utf8 NOT NULL,
  `user` text CHARACTER SET utf8,
  `time` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `zt` int(11) NOT NULL,
  `zjs` int(11) NOT NULL DEFAULT '0',
  `js` int(11) NOT NULL DEFAULT '0',
  `fk` int(11) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `overxx` text,
  `roomid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `jz_route`
--

CREATE TABLE IF NOT EXISTS `jz_route` (
  `id` int(11) NOT NULL COMMENT '路由id',
  `full_url` varchar(255) DEFAULT NULL COMMENT '完整url， 如：portal/list/index?id=1',
  `url` varchar(255) DEFAULT NULL COMMENT '实际显示的url',
  `listorder` int(5) DEFAULT '0' COMMENT '排序，优先级，越小优先级越高',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态，1：启用 ;0：不启用'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_rule`
--

CREATE TABLE IF NOT EXISTS `jz_rule` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `df` text CHARACTER SET utf8 COMMENT '底分',
  `gz` text CHARACTER SET utf8 COMMENT '单选规则',
  `gz2` text CHARACTER SET utf8 COMMENT '多选规则',
  `px` text CHARACTER SET utf8 COMMENT '牌型',
  `js` text CHARACTER SET utf8 COMMENT '局数',
  `sz` text CHARACTER SET utf8 COMMENT '上庄',
  `cm` text CHARACTER SET utf8 COMMENT '筹码',
  `sx` text CHARACTER SET utf8 COMMENT '上限',
  `zm` text CHARACTER SET utf8 COMMENT '抓马',
  `gp` text CHARACTER SET utf8 COMMENT '鬼牌',
  `gd` text CHARACTER SET utf8 COMMENT '锅底',
  `mode` text CHARACTER SET utf8 COMMENT '模式',
  `welfare` text CHARACTER SET utf8 COMMENT '福利',
  `target` text CHARACTER SET utf8 COMMENT '对象',
  `admittance` text CHARACTER SET utf8 NOT NULL COMMENT '准入',
  `zd` text CHARACTER SET utf8 NOT NULL COMMENT '最大下注',
  `type` int(11) NOT NULL DEFAULT '0',
  `zt` int(11) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `jz_rule`
--

INSERT INTO `jz_rule` (`id`, `name`, `df`, `gz`, `gz2`, `px`, `js`, `sz`, `cm`, `sx`, `zm`, `gp`, `gd`, `mode`, `welfare`, `target`, `admittance`, `zd`, `type`, `zt`, `sort`) VALUES
(1, '牛牛上庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 1, 1, 1),
(2, '固定庄家', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '10局X1房卡,20局X2房卡', '无,100,300,500', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 1, 1, 0),
(3, '自由抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 1, 1, 0),
(4, '明牌抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 1, 1, 0),
(5, '通比牛牛', '5分,10分,20分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 1, 1, 0),
(6, '牛牛上庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 2, 1, 0),
(7, '固定庄家', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '无,300,500,1000', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 2, 1, 0),
(8, '自由抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 2, 1, 0),
(9, '明牌抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 2, 1, 0),
(10, '通比牛牛', '5分,10分,20分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 2, 1, 0),
(11, '自由抢庄', '1分,3分,5分', '', '天公X10-雷公X7-地公X5,暴玖X9', '', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 3, 1, 0),
(12, '经典三公', '1分,3分,5分', '', '天公X10-雷公X7-地公X5,暴玖X9', '', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 3, 1, 0),
(13, '自由抢庄', '1分,2分,3分,4分,5分', '', '天公X10-雷公X7-地公X5,暴玖X9', '', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 4, 1, 0),
(14, '经典三公', '1分,2分,3分,4分,5分', '', '天公X10-雷公X7-地公X5,暴玖X9', '', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 4, 1, 0),
(15, '明牌抢庄', '1分,2分,3分,4分,5分', '', '暴玖X9', '', '12局X3房卡,24局X6房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 17, 1, 0),
(16, ' ', '', '', '100分以下不能比牌,闷牌-全场禁止比牌', '', '10局X1张房卡,20局X2张房卡', '', '2/4-4/8-8/16-10/20,2/4-5/10-10/20-20/40', '无,500,1000,2000', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400,≥800,≥1200,≥1600', '', 5, 1, 0),
(17, '自由抢庄', '', '无二八杠,二八杠2倍,二八杠3倍', '', '', '4局X1张房卡,8局X2张房卡', '', '10-20-30-50,20-30-50-80,30-50-80-100', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥500', '', 6, 1, 0),
(18, '固定庄家', '', '无二八杠,二八杠2倍,二八杠3倍', '', '', '4局X1张房卡,8局X2张房卡', '500分,1000分,1500分,无限制', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥500', '', 6, 1, 0),
(19, '广东麻将', '', '', '抢杠全包,杠爆全包', '', '8局X1张房卡,16局X2张房卡', '', '', '', '不跑马,2匹,4匹,6匹,8匹,爆炸马', '无鬼牌,翻牌当鬼,红中当鬼', '', NULL, NULL, NULL, '', '', 7, 1, 0),
(20, '斗地主', '1分,5分,10分', '轮流问地主,随机问地主', '', '', '6局X1张房卡,12局X2张房卡', '', '', '', '', '', '', NULL, NULL, NULL, '', '', 8, 1, 0),
(21, '斗公牛', '', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '银花牛(5倍),五牛花(6倍),炸弹牛(7倍),五小牛(8倍)', '', '', '', '', '', '', '100,200,300', NULL, NULL, NULL, '', '', 9, 1, 0),
(22, '明牌抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 10, 1, 1),
(23, '通比牛牛', '5分,10分,20分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 14, 1, 0),
(24, '明牌抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 14, 1, 0),
(25, '自由抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 14, 1, 0),
(26, '固定庄家', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '无,300,500,1000', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 14, 1, 0),
(27, '牛牛上庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花(5倍),炸弹牛(6倍),五小牛(8倍)', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 14, 1, 0),
(28, '牛牛上庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花（5倍）,炸弹牛（6倍）,五小牛（8倍）', '12局X2房卡,24局X4房卡', '无,300,500,1000', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 15, 1, 7),
(29, '固定庄家', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花（5倍）,炸弹牛（6倍）,五小牛（8倍）', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 15, 1, 0),
(30, '自由抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花（5倍）,炸弹牛（6倍）,五小牛（8倍）', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 15, 1, 8),
(31, '明牌抢庄', '1分,2分,3分,4分,5分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花（5倍）,炸弹牛（6倍）,五小牛（8倍）', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 15, 1, 10),
(32, '通比牛牛', '5分,10分,20分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '五牛花（5倍）,炸弹牛（6倍）,五小牛（8倍）', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 15, 1, 9),
(33, ' ', '', '', '100分以下不能比牌,闷牌-全场禁止比牌', '', '12局X2张房卡,24局X4张房卡', '', '2/4-4/8-8/16-10/20,2/4-5/10-10/20-20/40', '无,500,1000,2000', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400,≥800,≥1200,≥1600', '', 16, 1, 0),
(34, '明牌抢庄', '1分,2分,3分,4分,5分', '', '天公X10-雷公X7-地公X5,暴玖X9', '', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 4, 1, 0),
(35, '明牌抢庄', '1分,2分,3分,5分', '至尊(8倍)，双天、双地、双人(6倍)， 其他对子(5倍)，天王、地王(4倍)， 天杠、地杠(3倍)，九点(2倍)，    八点(2倍), 至尊(10倍)，双天、双地、双人(8倍)， 其他对子(6倍)，天王、地王(5倍)， 天杠、地杠(4倍)，九点(3倍)， 八点(2倍)', '', '丁三牌及二四牌可以互换使用', '12局{card}x3,24局{card}x6', '', '', '', '', '', '', NULL, NULL, NULL, '', '', 18, 1, 0),
(36, '固定庄家', '1分,2分,3分,5分', '至尊(8倍)，双天、双地、双人(6倍)， 其他对子(5倍)，天王、地王(4倍)， 天杠、地杠(3倍)，九点(2倍)， 八点(2倍), 至尊(10倍)，双天、双地、双人(8倍)， 其他对子(6倍)，天王、地王(5倍)， 天杠、地杠(4倍)，九点(3倍)， 八点(2倍)', '', '丁三牌及二四牌可以互换使用', '12局{card}x3,24局{card}x6', '', '', '', '', '', '', NULL, NULL, NULL, '', '', 18, 1, 0),
(37, '明牌抢庄', '1分,2分,3分,4分,5分,10分,30分,50分,100分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '顺子牛（5倍）,五牛花（5倍）,同花牛（6倍）,葫芦牛（7倍）,炸弹牛（8倍）,五小牛（8倍）,同花顺（10倍）', '', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 19, 1, 0),
(38, '自由抢庄', '1分,2分,3分,4分,5分', '3个相同3倍，2个相同2倍,3个相同5倍，2个相同3倍  3~10为小，11~18为大', '', '', '12局X3房卡,24局X6房卡', '', '', '', '', '', '', NULL, NULL, NULL, '', '5分,10分,20分,50分', 21, 1, 0),
(39, '固定庄家', '1分,2分,3分,4分,5分', '3个相同3倍，2个相同2倍,3个相同5倍，2个相同3倍  3~10为小，11~18为大', '', '', '12局x3房卡,24局x6房卡', '', '', '', '', '', '', NULL, NULL, NULL, '', '5分,10分,20分,50分', 21, 1, 0),
(40, '明牌抢庄', '1分,3分,5分,10分,20分,30分,40分,50分', '每人四张牌，分为大小两组，分别与庄家对牌，全胜全败  为胜负，一胜一败为和局', '', '丁三牌及二四牌可以互换使用', '12局X3房卡,24局X6房卡', '', '', '', '', '', '', NULL, NULL, NULL, '', '', 20, 1, 0),
(41, '固定庄家', '1分,3分,5分,10分,20分,30分,40分,50分', '每人四张牌，分为大小两组，分别与庄家对牌，全胜全败  为胜负，一胜一败为和局', '', '丁三牌及二四牌可以互换使用', '12局X3房卡,24局X6房卡', '', '', '', '', '', '', NULL, NULL, NULL, '', '', 20, 1, 0),
(42, '明牌抢庄', '1分,2分,3分,4分,5分', '至尊（8倍），双天、双地、双人（6倍），其他对子（5倍），天王、地王（4倍），天杠、地杠（3倍），九点（2倍），八点（2倍）,至尊（10倍），双天、双地、双人（8倍），其他对子（6倍），天王、地王（5倍），天杠、地杠（4倍），九点（3倍），八点（2倍）', '', '丁三牌及二四牌可以互换使用', '10局X2房卡,20局X4房', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≤300,≤1000,≤1500,≤2000', '', 22, 1, 0),
(43, '固定庄家', '1分,2分,3分,4分,5分', '至尊（8倍），双天、双地、双人（6倍），其他对子（5倍），天王、地王（4倍），天杠、地杠（3倍），九点（2倍），八点（2倍）,至尊（10倍），双天、双地、双人（8倍），其他对子（6倍），天王、地王（5倍），天杠、地杠（4倍），九点（3倍），八点（2倍）', '', '丁三牌及二四牌可以互换使用', '10局X2房卡,20局X4房', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≤300,≤1000,≤1500,≤2000', '', 22, 1, 0),
(44, '明牌抢庄', '1分,2分,3分,4分,5分,10分,30分,50分,100分', '牛牛X3牛九X2牛八X2,牛牛X4牛九X3牛八X2牛七X2', '', '顺子牛（5倍）,五牛花（5倍）,同花牛（6倍）,葫芦牛（7倍）,炸弹牛（8倍）,五小牛（8倍）,同花顺（10倍）', '10局X1房卡,20局X2房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥400', '', 23, 1, 0),
(45, ' ', '', '三个相同5倍，两个相同3倍', '', '', '12局X3房卡,24局X6房卡', '', '5，10，20，50,10，20，50，100', '100,300,500', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥500', '', 26, 1, 0),
(46, '明牌抢庄', '1分,2分,3分,4分,5分', '至尊10倍，双天双地双人8倍，对子6倍，天王地王5倍，天杠地杠天高九地高九4倍，九点3倍，八点2倍', '', '丁三牌及二四牌可以互换使用', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥200', '', 27, 1, 0),
(47, '固定庄家', '1分,2分,3分,4分,5分', '至尊10倍，双天双地双人8倍，对子6倍，天王地王5倍，天杠地杠天高九地高九4倍，九点3倍，八点2倍', '', '丁三牌及二四牌可以互换使用', '12局X2房卡,24局X4房卡', '', '', '', '', '', '', '普通模式,积分模式', '5%,10%,15%,30%', '大赢家,次赢家,所有赢家', '≥200', '', 27, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `jz_server`
--

CREATE TABLE IF NOT EXISTS `jz_server` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `zt` int(11) NOT NULL DEFAULT '0',
  `dk` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '0',
  `title` text,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_server`
--

INSERT INTO `jz_server` (`id`, `pid`, `zt`, `dk`, `num`, `title`, `type`) VALUES
(1, 0, 1, 3487, 0, '8002', 0),
(2, 0, 1, 3488, 0, '9人牛牛1', 2),
(5, 0, 1, 3489, 0, '6人斗牛1', 1),
(6, 0, 1, 3490, 3, '炸金花', 5),
(8, 0, 1, 3491, 0, '12', 10),
(9, 0, 1, 3492, 0, '三公', 3),
(10, 0, 1, 3493, 0, '9人牛牛8倍', 14),
(11, 0, 1, 3494, 0, '九人三公', 4),
(13, 0, 1, 3495, 0, '10人斗牛', 15),
(14, 0, 1, 3496, 1, '二八杠', 6),
(17, 0, 1, 3497, 0, '九人炸金花', 16),
(18, 0, 1, 3498, 0, '	12人吉祥三公', 17),
(22, 0, 1, 3499, 2, '五兽12人鱼虾蟹', 26),
(23, 0, 1, 3500, 1, '五兽9人牌九', 27);

-- --------------------------------------------------------

--
-- 表的结构 `jz_slide`
--

CREATE TABLE IF NOT EXISTS `jz_slide` (
  `slide_id` bigint(20) unsigned NOT NULL,
  `slide_cid` int(11) NOT NULL COMMENT '幻灯片分类 id',
  `slide_name` varchar(255) NOT NULL COMMENT '幻灯片名称',
  `slide_pic` varchar(255) DEFAULT NULL COMMENT '幻灯片图片',
  `slide_url` varchar(255) DEFAULT NULL COMMENT '幻灯片链接',
  `slide_des` varchar(255) DEFAULT NULL COMMENT '幻灯片描述',
  `slide_content` text COMMENT '幻灯片内容',
  `slide_status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示',
  `listorder` int(10) DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_slide_cat`
--

CREATE TABLE IF NOT EXISTS `jz_slide_cat` (
  `cid` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL COMMENT '幻灯片分类',
  `cat_idname` varchar(255) NOT NULL COMMENT '幻灯片分类标识',
  `cat_remark` text COMMENT '分类备注',
  `cat_status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1显示，0不显示'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `jz_terms`
--

CREATE TABLE IF NOT EXISTS `jz_terms` (
  `term_id` bigint(20) unsigned NOT NULL COMMENT '分类id',
  `name` varchar(200) DEFAULT NULL COMMENT '分类名称',
  `slug` varchar(200) DEFAULT '',
  `taxonomy` varchar(32) DEFAULT NULL COMMENT '分类类型',
  `description` longtext COMMENT '分类描述',
  `parent` bigint(20) unsigned DEFAULT '0' COMMENT '分类父id',
  `count` bigint(20) DEFAULT '0' COMMENT '分类文章数',
  `path` varchar(500) DEFAULT NULL COMMENT '分类层级关系路径',
  `seo_title` varchar(500) DEFAULT NULL,
  `seo_keywords` varchar(500) DEFAULT NULL,
  `seo_description` varchar(500) DEFAULT NULL,
  `list_tpl` varchar(50) DEFAULT NULL COMMENT '分类列表模板',
  `one_tpl` varchar(50) DEFAULT NULL COMMENT '分类文章页模板',
  `listorder` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1发布，0不发布'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_terms`
--

INSERT INTO `jz_terms` (`term_id`, `name`, `slug`, `taxonomy`, `description`, `parent`, `count`, `path`, `seo_title`, `seo_keywords`, `seo_description`, `list_tpl`, `one_tpl`, `listorder`, `status`) VALUES
(1, '新闻公告', '', 'article', '', 0, 0, '0-1', '', '', '', 'list', 'article', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `jz_term_relationships`
--

CREATE TABLE IF NOT EXISTS `jz_term_relationships` (
  `tid` bigint(20) NOT NULL,
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT 'posts表里文章id',
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `listorder` int(10) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '状态，1发布，0不发布'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_term_relationships`
--

INSERT INTO `jz_term_relationships` (`tid`, `object_id`, `term_id`, `listorder`, `status`) VALUES
(1, 1, 1, 0, 1),
(2, 2, 1, 0, 1),
(3, 3, 1, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `jz_user`
--

CREATE TABLE IF NOT EXISTS `jz_user` (
  `id` int(20) unsigned NOT NULL,
  `user_login` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `is_grade` int(1) NOT NULL DEFAULT '0' COMMENT '0:普通会员  1:高级会员',
  `fk` int(11) NOT NULL DEFAULT '0' COMMENT '房卡',
  `credits` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `gailv` int(11) NOT NULL DEFAULT '0' COMMENT '输赢概率',
  `create_time` datetime NOT NULL COMMENT '注册时间 ',
  `last_time` datetime NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '账号状态: 0正常，1被封，2限制登录',
  `disable_notice` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '操作记录',
  `last_login_ip` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '最后一次登录ip',
  `reg_ip` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0',
  `img` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `nickname` text COLLATE utf8mb4_bin,
  `nickname_base64` text COLLATE utf8mb4_bin NOT NULL,
  `token` mediumtext COLLATE utf8mb4_bin,
  `level` int(11) NOT NULL DEFAULT '0',
  `sfgl` int(11) NOT NULL DEFAULT '0',
  `openid` mediumtext COLLATE utf8mb4_bin,
  `daycard` int(10) unsigned NOT NULL DEFAULT '0',
  `sex` int(11) NOT NULL DEFAULT '1',
  `hyid` int(11) NOT NULL DEFAULT '0',
  `history_select` varchar(2048) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `is_control_user_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示控制用户ID，0：不显示 1：显示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- 表的结构 `jz_usermachine`
--

CREATE TABLE IF NOT EXISTS `jz_usermachine` (
  `id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `room` int(10) unsigned NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='机器人表';

-- --------------------------------------------------------

--
-- 表的结构 `jz_users`
--

CREATE TABLE IF NOT EXISTS `jz_users` (
  `id` bigint(20) unsigned NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；sp_password加密',
  `user_nicename` varchar(50) NOT NULL DEFAULT '' COMMENT '用户美名',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网站',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像，相对于upload/avatar目录',
  `sex` smallint(1) DEFAULT '0' COMMENT '性别；0：保密，1：男；2：女',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `signature` varchar(255) DEFAULT NULL COMMENT '个性签名',
  `last_login_ip` varchar(16) DEFAULT NULL COMMENT '最后登录ip',
  `last_login_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '最后登录时间',
  `create_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '注册时间',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '' COMMENT '激活码',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `user_type` smallint(1) DEFAULT '1' COMMENT '用户类型，1:admin ;2:会员',
  `coin` int(11) NOT NULL DEFAULT '0' COMMENT '金币',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号'
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jz_users`
--

INSERT INTO `jz_users` (`id`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `avatar`, `sex`, `birthday`, `signature`, `last_login_ip`, `last_login_time`, `create_time`, `user_activation_key`, `user_status`, `score`, `user_type`, `coin`, `mobile`) VALUES
(27, 'nle2018', '###26c178fcdcdf5b859d2d5cb7ff282f89', '', 'leo219@qq.com', '', NULL, 0, NULL, NULL, '222.208.150.141', '2018-05-20 00:22:35', '2018-02-12 05:51:04', '', 1, 0, 1, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `jz_user_op_credits`
--

CREATE TABLE IF NOT EXISTS `jz_user_op_credits` (
  `id` int(11) NOT NULL COMMENT '记录ID',
  `fromuid` int(11) NOT NULL COMMENT '操作用户',
  `touid` int(11) NOT NULL COMMENT '目标用户',
  `type` int(3) NOT NULL COMMENT '操作类型',
  `credits` varchar(11) COLLATE utf8mb4_bin NOT NULL COMMENT '操作数量',
  `createtime` int(11) NOT NULL COMMENT '操作时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- 表的结构 `jz_user_room`
--

CREATE TABLE IF NOT EXISTS `jz_user_room` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `overtime` int(11) NOT NULL,
  `jifen` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `settlementType` int(3) NOT NULL COMMENT '1：游戏，2：福利',
  `mode` tinyint(1) NOT NULL COMMENT '游戏模式：0普通，1积分'
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `jz_user_zdcard`
--

CREATE TABLE IF NOT EXISTS `jz_user_zdcard` (
  `id` int(10) unsigned NOT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL,
  `type` varchar(8) NOT NULL DEFAULT 'JH',
  `cards` varchar(1024) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='指定用户发牌表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jz_ad`
--
ALTER TABLE `jz_ad`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `ad_name` (`ad_name`);

--
-- Indexes for table `jz_all_record`
--
ALTER TABLE `jz_all_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_login` (`user_login`);

--
-- Indexes for table `jz_asset`
--
ALTER TABLE `jz_asset`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `jz_auth_access`
--
ALTER TABLE `jz_auth_access`
  ADD KEY `role_id` (`role_id`),
  ADD KEY `rule_name` (`rule_name`) USING BTREE;

--
-- Indexes for table `jz_auth_rule`
--
ALTER TABLE `jz_auth_rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module` (`module`,`status`,`type`);

--
-- Indexes for table `jz_comments`
--
ALTER TABLE `jz_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post_ID` (`post_id`),
  ADD KEY `comment_approved_date_gmt` (`status`),
  ADD KEY `comment_parent` (`parentid`),
  ADD KEY `table_id_status` (`post_table`,`post_id`,`status`),
  ADD KEY `createtime` (`createtime`);

--
-- Indexes for table `jz_common_action_log`
--
ALTER TABLE `jz_common_action_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_object_action` (`user`,`object`,`action`),
  ADD KEY `user_object_action_ip` (`user`,`object`,`action`,`ip`);

--
-- Indexes for table `jz_dj_room`
--
ALTER TABLE `jz_dj_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_fk_bag`
--
ALTER TABLE `jz_fk_bag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_game`
--
ALTER TABLE `jz_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_guestbook`
--
ALTER TABLE `jz_guestbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MA_dataID` (`MA_dataID`),
  ADD KEY `MA_ID` (`id`),
  ADD KEY `MA_userID` (`MA_userID`);

--
-- Indexes for table `jz_links`
--
ALTER TABLE `jz_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_status`);

--
-- Indexes for table `jz_list`
--
ALTER TABLE `jz_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`agent`,`time`) USING BTREE,
  ADD KEY `from_uid` (`uid`);

--
-- Indexes for table `jz_menu`
--
ALTER TABLE `jz_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `parentid` (`parentid`),
  ADD KEY `model` (`model`);

--
-- Indexes for table `jz_nav`
--
ALTER TABLE `jz_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_nav_cat`
--
ALTER TABLE `jz_nav_cat`
  ADD PRIMARY KEY (`navcid`);

--
-- Indexes for table `jz_oauth_user`
--
ALTER TABLE `jz_oauth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_options`
--
ALTER TABLE `jz_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `jz_order_guestbook`
--
ALTER TABLE `jz_order_guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_plugins`
--
ALTER TABLE `jz_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_posts`
--
ALTER TABLE `jz_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`id`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`),
  ADD KEY `post_date` (`post_date`) USING BTREE;

--
-- Indexes for table `jz_qun`
--
ALTER TABLE `jz_qun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_role`
--
ALTER TABLE `jz_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentId` (`pid`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `jz_role_user`
--
ALTER TABLE `jz_role_user`
  ADD KEY `group_id` (`role_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `jz_room`
--
ALTER TABLE `jz_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomid` (`roomid`);

--
-- Indexes for table `jz_route`
--
ALTER TABLE `jz_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_rule`
--
ALTER TABLE `jz_rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_server`
--
ALTER TABLE `jz_server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_slide`
--
ALTER TABLE `jz_slide`
  ADD PRIMARY KEY (`slide_id`),
  ADD KEY `slide_cid` (`slide_cid`);

--
-- Indexes for table `jz_slide_cat`
--
ALTER TABLE `jz_slide_cat`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cat_idname` (`cat_idname`);

--
-- Indexes for table `jz_terms`
--
ALTER TABLE `jz_terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `jz_term_relationships`
--
ALTER TABLE `jz_term_relationships`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `term_taxonomy_id` (`term_id`);

--
-- Indexes for table `jz_user`
--
ALTER TABLE `jz_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jz_usermachine`
--
ALTER TABLE `jz_usermachine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `jz_users`
--
ALTER TABLE `jz_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`);

--
-- Indexes for table `jz_user_op_credits`
--
ALTER TABLE `jz_user_op_credits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fromuid` (`fromuid`);

--
-- Indexes for table `jz_user_room`
--
ALTER TABLE `jz_user_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `jz_user_zdcard`
--
ALTER TABLE `jz_user_zdcard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`,`is_complete`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jz_ad`
--
ALTER TABLE `jz_ad`
  MODIFY `ad_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '广告id';
--
-- AUTO_INCREMENT for table `jz_all_record`
--
ALTER TABLE `jz_all_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商城用户注册登录表';
--
-- AUTO_INCREMENT for table `jz_asset`
--
ALTER TABLE `jz_asset`
  MODIFY `aid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_auth_rule`
--
ALTER TABLE `jz_auth_rule`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则id,自增主键',AUTO_INCREMENT=226;
--
-- AUTO_INCREMENT for table `jz_comments`
--
ALTER TABLE `jz_comments`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_common_action_log`
--
ALTER TABLE `jz_common_action_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_dj_room`
--
ALTER TABLE `jz_dj_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_fk_bag`
--
ALTER TABLE `jz_fk_bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_game`
--
ALTER TABLE `jz_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `jz_guestbook`
--
ALTER TABLE `jz_guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '前台提交信息，留言、申请等',AUTO_INCREMENT=231;
--
-- AUTO_INCREMENT for table `jz_links`
--
ALTER TABLE `jz_links`
  MODIFY `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jz_list`
--
ALTER TABLE `jz_list`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `jz_menu`
--
ALTER TABLE `jz_menu`
  MODIFY `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT for table `jz_nav`
--
ALTER TABLE `jz_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jz_nav_cat`
--
ALTER TABLE `jz_nav_cat`
  MODIFY `navcid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jz_oauth_user`
--
ALTER TABLE `jz_oauth_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_options`
--
ALTER TABLE `jz_options`
  MODIFY `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jz_order_guestbook`
--
ALTER TABLE `jz_order_guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=360;
--
-- AUTO_INCREMENT for table `jz_plugins`
--
ALTER TABLE `jz_plugins`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id';
--
-- AUTO_INCREMENT for table `jz_posts`
--
ALTER TABLE `jz_posts`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jz_qun`
--
ALTER TABLE `jz_qun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_role`
--
ALTER TABLE `jz_role`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jz_room`
--
ALTER TABLE `jz_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_route`
--
ALTER TABLE `jz_route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '路由id';
--
-- AUTO_INCREMENT for table `jz_rule`
--
ALTER TABLE `jz_rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `jz_server`
--
ALTER TABLE `jz_server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `jz_slide`
--
ALTER TABLE `jz_slide`
  MODIFY `slide_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_slide_cat`
--
ALTER TABLE `jz_slide_cat`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_terms`
--
ALTER TABLE `jz_terms`
  MODIFY `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jz_term_relationships`
--
ALTER TABLE `jz_term_relationships`
  MODIFY `tid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jz_user`
--
ALTER TABLE `jz_user`
  MODIFY `id` int(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_usermachine`
--
ALTER TABLE `jz_usermachine`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_users`
--
ALTER TABLE `jz_users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `jz_user_op_credits`
--
ALTER TABLE `jz_user_op_credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID';
--
-- AUTO_INCREMENT for table `jz_user_room`
--
ALTER TABLE `jz_user_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jz_user_zdcard`
--
ALTER TABLE `jz_user_zdcard`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
