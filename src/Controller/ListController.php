<?php

namespace App\Controller;

use App\DocumentRepository\DownInfoRepository;
use App\Service\RecommendList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\DocumentRepository\ListsRepository;
use Symfony\Component\HttpFoundation\Request;


class ListController extends AbstractController
{
    #[Route('/list_dz', name: 'dz')]
    public function dz(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '动作片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 12);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }

    #[Route('/list_kh', name: 'kh')]
    public function kh(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {

        $type       = '科幻片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 10);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),

        ]);
    }

    #[Route('/list_aq', name: 'aq')]
    public function aq(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '爱情片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 12);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }


    #[Route('/list_xj', name: 'xj')]
    public function xj(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '喜剧片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }


    #[Route('/list_kb', name: 'kb')]
    public function kb(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '恐怖片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }

    #[Route('/list_zz', name: 'zz')]
    public function zz(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '战争片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }

    #[Route('/list_jq', name: 'jq')]
    public function jq(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '剧情片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }

    #[Route('/list_kb', name: 'jl')]
    public function jl(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '纪录片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }

    #[Route('/list_dh', name: 'dh')]
    public function dh(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {

        $type       = '动画片';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }

    #[Route('/list_dsj', name: 'dsj')]
    public function dsj(ListsRepository $listsRepository, Request $request, PaginatorInterface $paginator, RecommendList $recommendList): Response
    {
        $type       = '电视剧';
        $query      = $listsRepository->createQueryBuilder()->field('type')->equals($type);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), 20);

        return $this->render('list/index.html.twig', [
            'pagination' => $pagination,
            'title'      => $type,
            'recommend'  => $recommendList->getList(),
        ]);
    }


}
