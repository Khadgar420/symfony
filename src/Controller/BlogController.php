<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;


use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo)
    {
        
        $articles = $repo->findAll();
        $articleCount = $repo->getArticleCount();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles,
            'articleCount' => $articleCount
        ]);
    }

    /**
     * @Route ("/", name="home")
     */
    public function home(ArticleRepository $repo)
    {
        
        $articles = $repo->findLast5();
        return $this->render('blog/home.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

        /**
     * @Route ("/hardware", name="hardware")
     */
    public function hardware(ArticleRepository $repo)
    {
        
        $articles = $repo->findAll();
        return $this->render('blog/hardware.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

        /**
     * @Route ("/gaming", name="gaming")
     */
    public function gaming(ArticleRepository $repo)
    {
        
        $articles = $repo->findAll();
        return $this->render('blog/gaming.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }
    
    
    
    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */
    public function create(Article $article = null,Request $request, EntityManagerInterface $manager)
    {
        if(!$article){

            $article = new Article();
        }
        


        // $form = $this->createFormBuilder($article)
        //             ->add('title')
        //             ->add('content')
        //             ->add('image')
                    
        //             ->getForm();

        $form = $this->createForm(ArticleType::class, $article);

                    $form->handleRequest($request);

                    if($form->isSubmitted() && $form->isValid())
                    {
                        if(!$article->getId()){
                            $article->setCreatedAt(new \DateTime());
                        }
                       

                        $manager->persist($article);
                        $manager->flush();

                        return $this->redirectToRoute('blog_show',['id'=>$article->getId()]);
                    }

        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode'=> $article->getId() !== null
        ]);
    }

    /**
     * @Route ("/blog/{id}", name="blog_show")
     */
    public function show(Article $article, Request $request, ObjectManager $manager,UserInterface $user)
    {
        $comment = new Comment();

        

        $form = $this->createForm(CommentType::class, $comment);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $comment->setCreatedAt(new \DateTime())
                    ->setArticle($article)
                    ->setAuthor($user->getUsername());
            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show',['id' => $article->getId()

            ]);

        }
    
        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }

    
    /**
     * @Route ("/privacy-statement", name="privacy-statement")
     */
    public function private()
    {
        return $this->render('blog/legal.html.twig');
    }
}
